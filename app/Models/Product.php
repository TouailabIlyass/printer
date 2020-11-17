<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model {

    protected $fillable = [
	'intitule',
	'description',
	'categorie_id',
	'prix',
	'size',
	'color',
	];
}