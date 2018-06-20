<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	use Searchable;

	protected $primaryKey = 'id';
    
    protected $fillable = [
    	'title',
    	'city',
    	'adress',
    	'nb_places',
    	'fee'
    ];

    protected $table = 'rooms';

    public function searchAs()
    {
    	return 'city';
    }

    public function getScoutKey()
    {
    	return $this->city;
    }
}
