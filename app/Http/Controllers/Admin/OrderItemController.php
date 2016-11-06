<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OrderItem\OrderItemRepository;
use App\Http\Requests\CreateOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use Session;


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
    	return view('admin.orderItem.index', compact('orderItems'));
    }
    public function create()
    {
    	return view('admin.orderItem.create');
    }
    public function store(CreateOrderItemRequest $request)
    {
    	$input = $request->only('product_id', 'order_id', 'order_item_status_code', 'quantity', 'price', 'details');
    	$order = $this->orderItemRepository->create($input);
        Session::flash('msg', trans('order.create_order_successfully'));

        return redirect(route('order.index'));
    }
    public function edit($id)
    {
    	$orderItem = $this->orderItemRepository->find($id);
    	return view('admin.orderItem.edit', compact('orderItem'));
    }
    public function update($id, UpdateOrderItemRequest $request)
    {
    	$orderItem = $this->orderItemRepository->find($id);
        if (empty($orderItem)) {
            Session::flash('msg', trans('orderItem.order_not_found'));
            return redirect(route('orderItem.index'));
        }
        $input = $request->only('product_id', 'order_id', 'order_item_status_code', 'quantity', 'price', 'details');
        $order = $this->orderItemRepository->update($input, $id);
        Session::flash('msg', trans('orderItem.update_order_successfully'));

        return redirect(route('orderItem.index'));
    }
    public function show($id)
    {
    	$orderItem = $this->orderItemRepository->find($id);
    	return view('admin.orderItem.show', compact('orderItem'));
    }
    public function destroy($id)
    {
    	$orderItem = $this->orderItemRepository->find($id);
        if (empty($orderItem)) {
            Session::flash('msg', trans('orderItem.order_item_not_found'));
            return redirect(route('orderItem.index'));
        }
        $this->orderItemRepository->delete($id);
        Session::flash('msg', trans('orderItem.delete_order_item_successfully'));

        return redirect(route('orderItem.index'));
    }
}
