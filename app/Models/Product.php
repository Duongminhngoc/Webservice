<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_type_id', 'product_status_id', 'name','price', 'quantity', 'image', 'description', 'other_product_details'];
    public function orderItems()
	{
	    return $this->hasMany(OrderItem::class);
	}
	public function productType()
	{
		return $this->belongsTo(ProductType::class);
	}
}
