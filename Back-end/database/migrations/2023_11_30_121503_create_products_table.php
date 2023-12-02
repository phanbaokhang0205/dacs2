<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('productID');
            $table->unsignedBigInteger('brandID');
            $table->string('productName');
            $table->string('productCode')->unique();
            $table->string('description')->nullable();
            $table->string('productImage')->nullable();
            $table->decimal('listPrice')->default(0);
            $table->decimal('discountPercent')->default(0);
            $table->timestamps();
            $table->foreign(['brandID'])->references('brandID')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
