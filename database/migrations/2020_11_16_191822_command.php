<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Command extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->unsigned();
            $table->string('email',60);
            $table->string('phone',20);
            $table->string('firstname',30);
            $table->string('lastname',30);
            $table->string('area',100);
            $table->string('address');
            $table->string('postalcode',20);
            $table->string('house',20);
            $table->string('country',30);
            $table->char('type_payment',1);
            $table->string('mail_paypal',60);
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
