<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Product name')->nullable();
            $table->string('Image')->nullable();
            $table->string('Category')->nullable();
            $table->double('Price per unit')->nullable();
            $table->string('Description')->nullable();
            $table->string('Short description')->nullable();
            $table->string('Quantity in stock')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('Product');
    }
}
