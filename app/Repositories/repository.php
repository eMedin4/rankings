<?php
namespace App\Repositories;

use DB;
use App\Entities\Product;
use App\Entities\Stat;
use Carbon\Carbon;

class Repository {

    //ANTES DEL IMPORT
    public function resetAvaibility()
    {
        Product::where('updated_at', '<=', Carbon::now()->subDays(5))->delete();
        DB::table('products')->update(['avaibility' => 0]);
    }

    // GUARDAR PRODUCTOS EN PRODUCTS
    public function storeProduct($item, $url, $sales) 
    {
		$product = Product::firstOrNew(['id' => $item->ASIN]);
		$product->id = $item->ASIN;
		$product->url = $url;
		$product->model = $item->ItemAttributes->Model;
		$product->size = $this->getSize($item->ASIN, $item->ItemAttributes->Size);
		$product->title = $this->getTitle($item->ASIN, $item->ItemAttributes->Title);
		$product->price = isset($item->Offers->Offer->OfferListing->Price->Amount) ? $item->Offers->Offer->OfferListing->Price->Amount : 0;
        $product->avaibility = isset($item->Offers->Offer->OfferListing->Price->Amount) ? 1 : 0;
        $product->amz_order = $sales;
		$product->save();

        echo $item->ASIN . ' ' . $item->ItemAttributes->Model . '<br>';
    }

    // GUARDAR EL TÍTULO
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

    // GUARDAR EL TAMAÑO
    public function getSize($asin, $size)
    {
        if (!$size OR $size == 0) {
            if(array_key_exists((string)$asin, config('products.size'))) {
                echo '********cojemos el size del array' . $asin . '^*************<br>';
                return config('products.size')[(string)$asin];
            } else {
                echo '############### El producto ' . $asin . ' no tiene capacidad declarada <br>';
            }         
        }
        return (int)$size;
    }

    // GUARDAR STATS
    public function setStats($value)
    {
        $product = Product::find($value[0]);
        if(isset($product)) {
            $stat = Stat::firstOrNew(['product_id' => $value[0]]);
            $stat->speed = $value[1];
            $stat->popularity = $value[2];
            $stat->read = $value[3];
            $stat->write = $value[4];
            $stat->product_id = $value[0];
            $stat->image = $value[5];
            $stat->format = $value[6];
            $stat->ranking = $this->setRanking($value);
            $stat->ordered = $this->setOrdered($value[2], $product->amz_order);
            $stat->save();
        }
    }

    // GUARDAR EL RANKING EN STATS
    public function setRanking($stats)
    {

        $speed = $stats[1]; //1-100
        $product = Product::where('id', $stats[0])->first(['size', 'price']);
        $priceSize = ($product->price['integer'] / $product->size_total) * 100;
        $value = 100 - $priceSize; //los €/GB bajos los convertimos en altos
        $value = $value * 1.3; //le damos un poco mas fuerza a €/GB
        $result = ($speed + $value) / 2;
        return $result;
    }

    public function setOrdered($popularity, $amazonOrder)
    {
        return $popularity * $amazonOrder;
    }







    // PRODUCTOS PARA PÁGINA MAIN
    public function getActiveProducts()
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')->where('avaibility', '1')->orderBy('stats.ordered')->take(20)->get();
    }

    // PRODUCTOS PARA PÁGINAS POR PRECIO
    public function MaxPrice($price)
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')->where('avaibility', '1')->where('price', '<', $price)->where('format', '2,5\'\' Sata 3')->orderBy('stats.ordered')->take(20)->get();
    }

    // PRODUCTOS PARA PÁGINAS SEGÚN CAPACIDAD
    public function Size($minSize, $maxSize)
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')->where('avaibility', '1')->whereBetween('size', [$minSize, $maxSize])->where('format', '2,5\'\' Sata 3')->orderBy('stats.ordered')->take(20)->get();
    }

    // PRODUCTOS PARA PÁGINAS DE FORMATOS
    public function Format($format1, $format2)
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')->where('avaibility', '1')->where('format', $format1)->orWhere('format', $format2)->orderBy('stats.ordered')->take(20)->get();
    }

    // PRODUCTOS PARA PÁGINAS DE ANÁLISIS
    public function search($value)
    {
        return Product::join('stats', 'products.id', '=', 'stats.product_id')
            ->whereRaw("MATCH(title) AGAINST(? IN BOOLEAN MODE)", array($value))
            ->where('avaibility', '1')
            ->orderBy('stats.ordered')
            ->get();
    }

    // PRODUCTOS PARA DASHBOARD
    public function getProducts()
    {
        return Product::with('stat')->get();
    }






}
