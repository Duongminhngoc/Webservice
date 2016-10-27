<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_type_id', 'product_status_id', 'name','price', 'quantity', 'image', 'description', 'other_product_details'];
}
