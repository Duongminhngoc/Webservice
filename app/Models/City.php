<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class City extends Model
{
    protected $table = 'cities';
	protected $fillable = ['name'];
	
 //    public function restaurants()
	// {
	//     return $this->hasMany(Restaurant::class);
	// }
}
