<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class County extends Model
{
    protected $table = 'counties';
	protected $fillable = ['city_id', 'name'];

    public function restaurants()
	{
	    return $this->hasMany(Restaurant::class);
	}
	public function cities()
	{
		return $this->belongsTo(City::class);
	}
}
