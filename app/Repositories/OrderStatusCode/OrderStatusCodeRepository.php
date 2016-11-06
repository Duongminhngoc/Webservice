<?php
namespace App\Repositories\OrderStatusCode;

use Auth;
use App\Models\OrderStatusCode;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\OrderStatusCode\OrderStatusCodeRepositoryInterface;
use Hash;

class OrderStatusCodeRepository extends BaseRepository implements OrderStatusCodeRepositoryInterface
{
    public function __construct(OrderStatusCode $orderStatusCode)
    {
        $this->model = $orderStatusCode;
    }
    public function getOrderStatusCode()
    {
    	return $this->model->pluck('status', 'id')->toArray();
    }
}
