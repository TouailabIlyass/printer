<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model {
	
    
    protected $fillable = [
	'id',
	'intitule',
	'description',
	'categorie_id',
	'prix',
	'size',
	'color',
	];
}