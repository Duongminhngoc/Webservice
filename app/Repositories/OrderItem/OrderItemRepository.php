<?php
namespace App\Repositories\OrderItem;

use Auth;
use App\Models\OrderItem;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\OrderItem\OrderItemRepositoryInterface;
use Hash;

class OrderItemRepository extends BaseRepository implements OrderItemRepositoryInterface
{
    public function __construct(OrderItem $orderItem)
    {
        $this->model = $orderItem;
    }
}
