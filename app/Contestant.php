<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contestant extends Model
{
	use SoftDeletes;

	protected $fillable = [
	'name', 'adres', 'wonplaats', 'code', 'contest_id',
	];

	protected $hidden = [
	'ip',
	];

	protected $dates = [
	'deleted_at'
	];
}
