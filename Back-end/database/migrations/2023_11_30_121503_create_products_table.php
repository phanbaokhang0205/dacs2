<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('productID');
            $table->unsignedBigInteger('brandID');

            $table->string('gearBox');
            $table->string('productName');
            $table->string('productCode');
            $table->string('description')->nullable();
            $table->string('productImage')->nullable();
            $table->decimal('listPrice')->default(0);
            $table->decimal('discountPercent')->default(0);
            $table->timestamps();

            $table->foreign('brandID')->references('brandID')->on('brands');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}