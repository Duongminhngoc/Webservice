<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OrderStatusCode\OrderStatusCodeRepository;

class OrderStatusController extends Controller
{
	protected $orderStatusRepository;
	public function __construct(OrderStatusCodeRepository $orderStatusCodeRepository)
    {
        $this->orderStatusCodeRepository = $orderStatusCodeRepository;
    }
    public function index()
    {
    	$orderStatusCode = $this->orderStatusCodeRepository->all();
    	dd($orderStatusCode);
    }
}
