<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	protected $primaryKey = 'id';
    
    protected $fillable = [
    	'title',
    	'city',
    	'adress',
    	'nb_places',
    	'fee'
    ];

    protected $table = 'rooms';
}
