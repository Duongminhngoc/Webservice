<?php
namespace App\Repositories\Order;

use Auth;
use App\Models\Order;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use Hash;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function __construct(Order $order)
    {
        $this->model = $order;
    }
}
