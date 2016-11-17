<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\OrderItemStatusCode;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $fillable = ['product_id', 'order_id', 'order_item_status_code_id', 'quantity', 'price', 'details'];
    public function product()
	{
	    return $this->belongsTo(Product::class);
	}
	public function orderItemStatusCode()
	{
	    return $this->belongsTo(OrderItemStatusCode::class);
	}
}
