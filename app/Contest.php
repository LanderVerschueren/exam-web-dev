<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'winner', 'start_date', 'end_date',
    ];

    protected $hidden = [
        'winning_code',
    ];
}
