<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnDelete();
            $table->string('name_tm');
            $table->string('name_en')->nullable();
            $table->string('full_name_tm');
            $table->string('full_name_en')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('barcode')->nullable();
            $table->text('description')->nullable();
            $table->unsignedDouble('price')->default(0);
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedInteger('discount_percent')->default(0);
            $table->dateTime('discount_start')->useCurrent();
            $table->dateTime('discount_end')->useCurrent();
            $table->boolean('credit')->default(0);
            $table->unsignedInteger('viewed')->default(0);
            $table->unsignedInteger('sold')->default(0);
            $table->unsignedInteger('favorites')->default(0);
            $table->unsignedInteger('random')->default(0);
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
        Schema::dropIfExists('products');
    }
};
