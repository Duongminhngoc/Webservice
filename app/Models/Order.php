<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\OrderStatusCode;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id', 'order_status_code', 'details'];

    public function user()
	{
		return $this->belongsTo(User::class);
	}
}
