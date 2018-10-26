<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poly extends Model
{
	public $table = "polys";
	protected $fillable = [

		'nama', 'latitude', 'longitude'

	];
}
