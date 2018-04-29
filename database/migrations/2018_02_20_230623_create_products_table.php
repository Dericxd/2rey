<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->integer('amount');
            $table->decimal('tax');
            $table->integer('user_id')->unsigned();
            $table->integer('cate_id')->unsigned();
            $table->integer('deta_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cate_id')->references('id')->on('categories');
            $table->foreign('deta_id')->references('id')->on('details');
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
}
