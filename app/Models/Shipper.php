<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'shippers';
    protected $fillable = ['id', 'name', 'phone', 'address', 'status_id'];
}