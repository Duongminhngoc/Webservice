<?php
namespace App\Repositories\Shipper;

use Auth;
use App\Models\Shipper;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\Shipper\ShipperRepositoryInterface;
use Hash;

class ShipperRepository extends BaseRepository implements ShipperRepositoryInterface
{
    public function __construct(Shipper $shipper)
    {
        $this->model = $shipper;
    }
    
}
