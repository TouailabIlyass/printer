<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Checkout extends Model {
	
    
    protected $fillable = [
	'command_id',
	'product_id',
	'quantite',
	'total',
	];
}