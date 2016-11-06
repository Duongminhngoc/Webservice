<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $fillable = ['product_id', 'order_id', 'order_item_status_code', 'quantity', 'price', 'details'];
    public function product()
	{
	    return $this->belongsTo(Product::class);
	}
}
