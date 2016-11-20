<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\County;
use App\Models\OrderStatus;
use App\User;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $fillable = ['name', 'county_id', 'owner_id', 'phone', 'email', 'address', 'description'];

    public function county()
	{
	    return $this->belongsTo(County::class,'city_id','id');
	}
	public function owner()
	{
		return $this->belongsTo(User::class,'owner_id','id');
	}
    public function product()
    {
        return $this->hasMany(Product::class,'restaurant_id','id');
    }
}
