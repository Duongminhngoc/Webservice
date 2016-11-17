<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Order\OrderRepository;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Session;
use App\Repositories\OrderItemStatusCode\OrderItemStatusCodeRepository;

class OrderController extends Controller
{
	protected $orderRepository;
	public function __construct(OrderRepository $orderRepository,OrderItemStatusCodeRepository $orderItemStatusCodeRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->orderItemStatusCodeRepository = $orderItemStatusCodeRepository;
    }
    public function index()
    {
    	$orders = $this->orderRepository->all();
        $i=1;
    	return view('admin.order.index', compact('orders','i'));
    }
    public function create()
    {   

        $status = $this->orderItemStatusCodeRepository->getOrderStatusCode();
    	return view('admin.order.create', compact('status'));
    }
    public function store(CreateOrderRequest $request)
    {
    	$input = $request->only('user_id', 'order_status_code', 'details');
    	$order = $this->orderRepository->create($input);
        Session::flash('msg', trans('order.create_order_successfully'));

        return redirect(route('order.index'));
    }
    public function edit($id)
    {
    	$order = $this->orderRepository->find($id);
    	return view('admin.order.edit', compact('order'));
    }
    public function update($id, UpdateOrderRequest $request)
    {
    	$order = $this->orderRepository->find($id);
        if (empty($order)) {
            Session::flash('msg', trans('order.order_not_found'));
            return redirect(route('order.index'));
        }
        $input = $request->only('user_id', 'order_status_code', 'details');
        $order = $this->orderRepository->update($input, $id);
        Session::flash('msg', trans('order.update_order_successfully'));

        return redirect(route('order.index'));
    }
    public function show($id)
    {
    	$order = $this->orderRepository->find($id);
    	return view('admin.order.show', compact('order'));
    }
    public function destroy($id)
    {
    	$order = $this->orderRepository->find($id);
        if (empty($order)) {
            Session::flash('msg', trans('order.order_not_found'));
            return redirect(route('order.index'));
        }
        $this->orderRepository->delete($id);
        Session::flash('msg', trans('order.delete_order_successfully'));

        return redirect(route('order.index'));
    }
}
