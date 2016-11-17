<?php
namespace App\Repositories\OrderItemStatusCode;

use Auth;
use App\Models\OrderItemStatusCode;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\OrderItemStatusCode\OrderItemStatusCodeRepositoryInterface;
use Hash;

class OrderItemStatusCodeRepository extends BaseRepository implements OrderItemStatusCodeRepositoryInterface
{
    public function __construct(OrderItemStatusCode $orderItemStatusCode)
    {
        $this->model = $orderItemStatusCode;
    }
    public function getOrderItemStatusCode()
    {
    	return $this->model->pluck('status', 'id')->toArray();
    }
}
