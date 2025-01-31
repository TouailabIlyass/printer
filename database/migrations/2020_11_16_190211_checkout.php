<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Checkout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->unsignedBigInteger('command_id');
            $table->foreign('command_id')->references('id')->on('commands');
            $table->unsignedBigInteger('product_id');
            $table->primary(['command_id', 'product_id']);
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('quantite');
            $table->string('total',10);
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
        //
    }
}
