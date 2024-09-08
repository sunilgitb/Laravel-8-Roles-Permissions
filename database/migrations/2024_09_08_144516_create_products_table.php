<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing primary key column named `id`
            $table->string('name'); // The name of the product
            $table->decimal('price', 8, 2); // The price of the product (total 8 digits with 2 decimal places)
            $table->string('image')->nullable(); // The image URL or path (nullable in case no image is provided)
            $table->string('category'); // The category of the product
            $table->text('description')->nullable(); // A description of the product (nullable in case no description is provided)
            $table->timestamps(); // This adds `created_at` and `updated_at` timestamp columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
