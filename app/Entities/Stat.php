<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
	protected $fillable = ['product_id'];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
