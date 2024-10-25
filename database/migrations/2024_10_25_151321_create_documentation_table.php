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
        Schema::create('documentation', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->dateTime('create_date');
            $table->dateTime('update_date');

            $table->unsignedBigInteger('fitur_idfitur');
            $table->foreign('fitur_idfitur')->references('id')->on('fitur');

            $table->unsignedBigInteger('fitur_products_idproducts');
            $table->foreign('fitur_products_idproducts')->references('id')->on('products');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentation');
    }
};
