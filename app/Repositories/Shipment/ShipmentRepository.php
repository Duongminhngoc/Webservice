<?php
namespace App\Repositories\Shipment;

use Auth;
use App\Models\Shipment;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\Shipment\ShipmentRepositoryInterface;
use Hash;

class ShipmentRepository extends BaseRepository implements ShipmentRepositoryInterface
{
    public function __construct(Shipment $shipment)
    {
        $this->model = $shipment;
    }
    
}
