<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Carbon\Carbon;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 16)->index();
            $table->string('url');
            $table->string('model');
            $table->integer('size');
            $table->string('title');
            $table->integer('price');
            $table->boolean('avaibility')->default(0);
            $table->smallInteger('amz_order');
            $table->smallInteger('def_order')->default(0);
            $table->tinyInteger('trend');
            $table->timestamp('time_trend')->default(Carbon::now());
            $table->timestamps();
        });

        DB::statement('ALTER TABLE `products` ADD FULLTEXT search(title)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
