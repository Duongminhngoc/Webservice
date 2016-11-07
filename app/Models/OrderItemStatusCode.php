<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class OrderItemStatusCode extends Model
{
    protected $table = 'order_item_status_codes';
    protected $fillable = ['status', 'description'];

    public function Orders()
    {
    	return $this->belongsTo(Order::class);
    }
}
