<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('speed', 4, 1);
            $table->decimal('popularity', 3, 1);
            $table->smallInteger('read');
            $table->smallInteger('write');
            $table->string('image');
            $table->string('product_id', 16);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('format');
            $table->smallInteger('ranking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stats');
    }
}
