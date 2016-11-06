<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OrderItem\OrderItemRepository;
use Response;

class OrderItemController extends Controller
{
    protected $orderItemRepository;
	public function __construct(OrderItemRepository $orderItemRepository)
    {
        $this->orderItemRepository = $orderItemRepository;
    }
    public function index()
    {
    	$orderItems = $this->orderItemRepository->all();

    	
        if (!$orderItems) {
            return Response::json([
                'message' => 'Order item not found',
                'status' => false,
            ]);
        } else {
            return Response::json([
                'message' => 'success',
                'data' => $orderItems,
                'status' => true,
            ]);
        }
    }
    public function store(Request $request)
    {
    	$input = $request->only('product_id', 'order_id', 'order_item_status_code', 'quantity', 'price', 'details');

        if ($this->orderItemRepository->create($input)) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'OrderItem not found',
                'status' => false,
            ]);
        }
    }
    public function show($id)
    {
        $orderItem = $this->orderItemRepository->find($id);

        if ($orderItem) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $orderItem,
            ]);
        } else {
            return response()->json([
                'message' => 'Order item not found',
                'status' => false,
            ]);
        }
    }

    public function update($id, Request $request)
    {
        $orderItem = $this->orderItemRepository->find($id);
        
        if ($orderItem) { 
            $input = $request->only('product_id', 'order_id', 'order_item_status_code', 'quantity', 'price', 'details');
            $order = $this->orderItemRepository->update($input, $id);

            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $order,
            ]);
        } else {
            return response()->json([
                'message' => 'Order not found',
                'status' => false,
            ]);
        }
    }
    public function destroy($id)
    {
        $orderItem = $this->orderItemRepository->find($id);
        
        if ($orderItem) { 
            $orderItem = $this->orderItemRepository->delete($id);

            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'Order not found',
                'status' => false,
            ]);
        }
    }
}
