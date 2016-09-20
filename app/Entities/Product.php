<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $primaryKey = 'id';
    public $incrementing = false;
	protected $dates = ['time_trend'];
	protected $fillable = ['id'];

	public function stat()
    {
        return $this->hasOne(Stat::class);
    }	




    public function getPriceRelativeAttribute()
    {
        //si es 1 o 2 es que son Tb
        $size = $this->size_total;

        //ojo esto es provisional
        if ($size == 0) {
            $size = 1;
        }

        $value = $this->price['integer'] / $size;
        $value = number_format((float)$value, 2, '.', '');

        switch (true) {
            case $value < 0.25: $class = 100; break;
            case $value < 0.28: $class = 90; break;
            case $value < 0.31: $class = 80; break;
            case $value < 0.34: $class = 70; break;
            case $value < 0.37: $class = 60; break;
            case $value < 0.40: $class = 50; break;
            case $value < 0.43: $class = 40; break;
            case $value < 0.47: $class = 30; break;
            default: $class = 20; break;
        }

        return [
            'value'   => $value,
            'class'   => $class
        ];


    }

    public function getSizeTotalAttribute()
    {
        if ($this->size <=16) {
            return $this->size * 1000;
        }    
        return $this->size;    
    }

    public function getPriceAttribute($value)
    {
    	return [
    		'integer' => substr($value, 0, -2),
    		'decimal' => substr($value, -2)
    	];
    }

    public function getSizeFormatAttribute()
    {
        if ($this->size < 32) {
            return $this->size . ' TB';
        } else {
            return $this->size . ' GB';
        }
    }

    public function getReadAttribute($value)
    {
        switch (true) {
            case $value > 500: $class = 100; break;
            case $value > 470: $class = 90; break;
            case $value > 440: $class = 80; break;
            case $value > 410: $class = 70; break;
            case $value > 380: $class = 60; break;
            case $value > 350: $class = 50; break;
            case $value > 320: $class = 40; break;
            case $value > 290: $class = 30; break;
            default: $class = 20; break;
        }

        return [
            'value'   => $value,
            'class'   => $class
        ];
    }

    public function getWriteAttribute($value)
    {
        switch (true) {
            case $value > 350: $class = 100; break;
            case $value > 310: $class = 90; break;
            case $value > 270: $class = 80; break;
            case $value > 230: $class = 70; break;
            case $value > 190: $class = 60; break;
            case $value > 150: $class = 50; break;
            case $value > 110: $class = 40; break;
            case $value > 70: $class = 30; break;
            default: $class = 20; break;
        }

        return [
            'value'   => $value,
            'class'   => $class
        ];
    }

    public function getSpeedAttribute($value)
    {
        switch (true) {
            case $value > 90: $class = 100; break;
            case $value > 80: $class = 90; break;
            case $value > 70: $class = 80; break;
            case $value > 60: $class = 70; break;
            case $value > 50: $class = 60; break;
            case $value > 40: $class = 50; break;
            case $value > 30: $class = 40; break;
            case $value > 20: $class = 30; break;
            default: $class = 20; break;
        }

        return [
            'value'   => $value,
            'class'   => $class
        ];
    }

    public function getPopularityAttribute($value)
    {
        switch (true) {
            case $value > 4: $class = 100; break;
            case $value > 3: $class = 90; break;
            case $value > 2: $class = 80; break;
            case $value > 1: $class = 70; break;
            case $value > 0.7: $class = 60; break;
            case $value > 0.5: $class = 50; break;
            case $value > 0.4: $class = 40; break;
            case $value > 0.3: $class = 30; break;
            default: $class = 20; break;
        }

        if ($value == 0.0) {
            $value = '< 0.1';
        }

        return [
            'value'   => $value,
            'class'   => $class
        ];
    }


    public function getRankingAttribute($value)
    {
        switch (true) {
            case $value > 90: $class = 100; $value = 9;break;
            case $value > 85: $class = 90; $value = 8;break;
            case $value > 80: $class = 80; $value = 7;break;
            case $value > 75: $class = 70; $value = 6;break;
            case $value > 70: $class = 60; $value = 5;break;
            case $value > 65: $class = 50; $value = 4;break;
            case $value > 60: $class = 40; $value = 3;break;
            case $value > 55: $class = 30; $value = 2;break;
            default: $class = 50; $value = 1;break;
        }

        return [
            'value'   => $value,
            'class'   => $class
        ];
    }


}
