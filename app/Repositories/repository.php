<?php
namespace App\Repositories;

use DB;
use App\Entities\Product;
use App\Entities\Stat;
use Carbon\Carbon;

class Repository {

    public function storeProduct($item, $url, $sales) 
    {

		$product = Product::firstOrNew(['id' => $item->ASIN]);
		$product->id = $item->ASIN;
		$product->url = $url;
		$product->model = $item->ItemAttributes->Model;
		$product->size = (int)$item->ItemAttributes->Size;
		$product->title = $this->getTitle($item->ASIN, $item->ItemAttributes->Title);
		$product->price = isset($item->Offers->Offer->OfferListing->Price->Amount) ? $item->Offers->Offer->OfferListing->Price->Amount : 0;
        $product->avaibility = isset($item->Offers->Offer->OfferListing->Price->Amount) ? 1 : 0;
        $trend = $this->trendAlgorithm($sales, $product->amz_order, $product->trend, $product->time_trend);
        $product->trend = $trend['trend'];
        $product->time_trend = $trend['time'];
        $product->amz_order = $sales;
		$product->save();

        echo $item->ASIN . ' ' . $item->ItemAttributes->Model . '<br>';
    }

    public function getTitle($asin, $title)
    {
        //si existe en config cojerlo
        if(array_key_exists((string)$asin, config('products.title'))) {
            return config('products.title')[(string)$asin];
        }        

        //si no cortar el de amazon
        if (strpos($title, '-')) {
            $title = explode('-', $title);
            return $title[0];
        }
        
        return $title;
    }

    public function resetAvaibility()
    {
        DB::table('products')->update(['avaibility' => 0]);
    }

/*    public function deleteOlds()
    {
        Product::where('update_at', '<', Carbon::now()->subMinutes(5))->delete();
    }*/

    public function getProducts()
    {
        return Product::with('stat')->get();
    }

    public function getActiveProducts()
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')->where('avaibility', '1')->get();
    }

    public function MaxPrice($price)
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')->where('avaibility', '1')->where('price', '<', $price)->get();
    }


    public function Size($minSize, $maxSize)
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')->where('avaibility', '1')->whereBetween('size', [$minSize, $maxSize])->get();
    }

    public function Format($format1, $format2)
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')->where('avaibility', '1')->where('format', $format1)->orWhere('format', $format2)->get();
    }

    public function search($value)
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')
            ->whereRaw("MATCH(title) AGAINST(? IN BOOLEAN MODE)", array($value))
            ->where('avaibility', '1')
            ->get();
    }

    public function setStats($value)
    {
        if(Product::find($value[0])) {
            $stat = Stat::firstOrNew(['product_id' => $value[0]]);
            $stat->speed = $value[1];
            $stat->popularity = $value[2];
            $stat->read = $value[3];
            $stat->write = $value[4];
            $stat->product_id = $value[0];
            $stat->image = $value[5];
            $stat->format = $value[6];
            $stat->ranking = $this->setRanking($value);
            $stat->save();
        }
    }


    public function trendAlgorithm($i, $amz_order, $trend, $time_trend)
    {
        if ($i == $amz_order) {
            //si se mantiene el orden
            if ($trend = 0) {
                //y trend es 0
                return [
                    'trend' => 0,
                    'time'  => Carbon::now()
                ];
            } else {
                //y trend es +1 o -1
                if ($time_trend < Carbon::now()->subHours(48)) {
                    //si el time_trend está en las últimas 48h mantenemos el trend
                    return [
                        'trend' => $product->trend,
                        'time'  => $product->time_trend
                    ];
                } else {
                    //si es mas antiguo que 48h reseteamos
                    return [
                        'trend' => 0,
                        'time'  => Carbon::now()
                    ];                      
                }
            }
        } elseif ($i > $amz_order) {
            //si el actual es mas alto
            return [
                'trend' => -1,
                'time'  => Carbon::now()
            ];
        } else {
            //si el actual es mas bajo
            return [
                'trend' => 1,
                'time'  => Carbon::now()
            ];                
        }
    }


    public function setRanking($stats)
    {

        $speed = $stats[1]; //1-100
        $product = Product::where('id', $stats[0])->first(['size', 'price']);
        $priceSize = ($product->price['integer'] / $product->size_total) * 100;
        $value = 100 - $priceSize; //los €/GB bajos los convertimos en altos
        $value = $value * 1.3; //le damos un poco mas fuerza a €/GB
        $result = ($speed + $value) / 2;

/*        if($stats[0] == 'B00P738Z8O') {
            dd($priceSize);
        }*/
        return $result;
    }



}