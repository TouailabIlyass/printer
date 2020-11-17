<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Command extends Model {
	
    
    protected $fillable = [
	'id',
	'email',
	'phone',
	'firstname',
	'lastname',
	'area',
	'address',
	'postalcode',
	'house',
	'country',
	'type_payment',
	'mail_paypal',
	'total',
	];
}