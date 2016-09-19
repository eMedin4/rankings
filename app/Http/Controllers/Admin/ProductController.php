<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Repository;

class ProductController extends Controller
{

	private $repository;

	public function __Construct(Repository $repository)
	{
        $this->repository = $repository;
        set_time_limit(0);
	}

	public function init()
	{
		$this->repository->resetAvaibility();
		$this->import(1);
		sleep(2);
		$this->import(2);		
		sleep(2);
		$this->import(3);
	}


	public function import($page)
	{
		$getAmazonData = $this->getAmazonData($page);

		//	MOSTRAMOS ERRORES O NULLS
		if (!isset($getAmazonData) || $getAmazonData->Items->Request->IsValid == False || $getAmazonData->Items->Request->Errors ) {
			dd($getAmazonData);
		} 


		foreach ($getAmazonData->Items->Item as $item) {
			//si tiene variaciones tiene parentasin
			if($item->ParentASIN) {
				//cojemos los productos 'variaciones' y los recorremos
				sleep(2);
				$getAmazonVariations = $this->getAmazonVariations($item->ParentASIN);
				/*dd($getAmazonVariations);*/
				if (!isset($getAmazonVariations) || $getAmazonVariations->Items->Request->IsValid == False || $getAmazonVariations->Items->Request->Errors ) {
					dd($getAmazonVariations);
				} 
				/*echo '-------------' . $item->ParentASIN . '---------------';*/

				foreach ($getAmazonVariations->Items->Item->Variations->Item as $itemVariation) {
					if(!in_array($itemVariation->ASIN, config('products.ban'))) {
						$this->repository->storeProduct($itemVariation, $item->DetailPageURL, $item->SalesRank);
					}
				}
			} else {
				if(!in_array($item->ASIN, config('products.ban'))) {
					$this->repository->storeProduct($item, $item->DetailPageURL, $item->SalesRank);
				}
			}
		}

	}

    public function getAmazonData($page)
    {

		$aws_access_key_id = env('AWS_ACCESS_KEY');
		$aws_secret_key = env('AWS_SECRET_KEY');
		$endpoint = "webservices.amazon.es";
		$uri = "/onca/xml";

		$params = array(
		    "Service" => "AWSECommerceService",
		    "Operation" => "ItemSearch",
		    "AWSAccessKeyId" => "AKIAJSRBZQHC5I4Y3GPA",
		    "AssociateTag" => "dfsfdsdfsd",
		    "SearchIndex" => "PCHardware",
		    "ResponseGroup" => "Images,ItemAttributes,Offers,SalesRank",
		    "Version" => "2013-08-01",
		    "BrowseNode" => "937918031",
		    "ItemPage" => $page
		);

		// Set current timestamp if not set
		if (!isset($params["Timestamp"])) {
		    $params["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
		}

		// Sort the parameters by key
		ksort($params);

		$pairs = array();

		foreach ($params as $key => $value) {
		    array_push($pairs, rawurlencode($key)."=".rawurlencode($value));
		}

		// Generate the canonical query
		$canonical_query_string = join("&", $pairs);

		// Generate the string to be signed
		$string_to_sign = "GET\n".$endpoint."\n".$uri."\n".$canonical_query_string;

		// Generate the signature required by the Product Advertising API
		$signature = base64_encode(hash_hmac("sha256", $string_to_sign, $aws_secret_key, true));

		// Generate the signed URL
		$request_url = 'http://'.$endpoint.$uri.'?'.$canonical_query_string.'&Signature='.rawurlencode($signature);

		/* I prefer using CURL */
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL,$request_url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

	    $xml = curl_exec($ch);
	    return @simplexml_load_string($xml);

    }


    public function getAmazonVariations($parentAsin)
    {

		$aws_access_key_id = env('AWS_ACCESS_KEY');
		$aws_secret_key = env('AWS_SECRET_KEY');
		$endpoint = "webservices.amazon.es";
		$uri = "/onca/xml";

		$params = array(
		    "Service" => "AWSECommerceService",
		    "Operation" => "ItemLookup",
		    "AWSAccessKeyId" => "AKIAJSRBZQHC5I4Y3GPA",
		    "AssociateTag" => "indicecinenet-21",
		    "ItemId" => $parentAsin,
		    "IdType" => "ASIN",
		    "ResponseGroup" => "Variations",
		    "Version" => "2011-08-01"
		);

		// Set current timestamp if not set
		if (!isset($params["Timestamp"])) {
		    $params["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
		}

		// Sort the parameters by key
		ksort($params);

		$pairs = array();

		foreach ($params as $key => $value) {
		    array_push($pairs, rawurlencode($key)."=".rawurlencode($value));
		}

		// Generate the canonical query
		$canonical_query_string = join("&", $pairs);

		// Generate the string to be signed
		$string_to_sign = "GET\n".$endpoint."\n".$uri."\n".$canonical_query_string;

		// Generate the signature required by the Product Advertising API
		$signature = base64_encode(hash_hmac("sha256", $string_to_sign, $aws_secret_key, true));

		// Generate the signed URL
		$request_url = 'http://'.$endpoint.$uri.'?'.$canonical_query_string.'&Signature='.rawurlencode($signature);

		/* I prefer using CURL */
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL,$request_url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

	    $xml = curl_exec($ch);
	    return @simplexml_load_string($xml);

    }
}
