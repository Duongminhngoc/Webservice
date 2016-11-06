<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $table = 'shipments';
    protected $fillable = ['shipper_id', 'shipment_status_id', 'invoice_id', 'tracking_number', 'datetime_start', 'datetime_end', 'other_shipment_details'];
}
