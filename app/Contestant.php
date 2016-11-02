<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contestant extends Model
{
	use SoftDeletes;

	protected $fillable = [
	'name', 'adres', 'wonplaats', 'code', 'contest_id', 'ip',
	];

	protected $hidden = [
	'ip', 'adres', 'woonplaats', 'code',
	];

	protected $dates = [
	'deleted_at'
	];

	public function contest()
    {
      return $this->belongsTo('App\Contest');
    }
}
