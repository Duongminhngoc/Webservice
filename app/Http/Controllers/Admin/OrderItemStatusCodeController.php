<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OrderItemStatusCode\OrderItemStatusCodeRepository;
use App\Models\OrderItemStatusCode;

class OrderItemStatusCodeController extends Controller
{
    protected $orderItemStatusRepository;
	public function __construct(OrderItemStatusCodeRepository $orderItemStatusRepository)
    {
        $this->orderItemStatusRepository = $orderItemStatusRepository;
    }
    public function index()
    {
    	$orderItemStatusCode = OrderItemStatusCode::all();
    	dd($orderItemStatusCode);
    }
}
