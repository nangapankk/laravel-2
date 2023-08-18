<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description');
            $table->text('category');
            $table->decimal('buy',12,2)->default(0); //harga barang terdiri dari 10 angka ditambah 2 desimal
            $table->decimal('sell',12,2)->default(0); //harga barang terdiri dari 10 angka ditambah 2 desimal
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedBigInteger('supplier_id')->default;
            $table->string('image_url'); //menyimpan url image yang diupload
            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('supplier')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
