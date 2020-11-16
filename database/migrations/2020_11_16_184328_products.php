<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->unsigned();
            $table->string('intitule',100);
            $table->longText('description');
            $table->unsignedBigInteger('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->float('prix');
            $table->char('size',10);
            $table->string('color',20);
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
