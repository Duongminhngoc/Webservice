<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Shipper\ShipperRepository;
use Response;

class ShipperController extends Controller
{
    protected $shipperRepository;
	public function __construct(shipperRepository $shipperRepository)
    {
        $this->shipperRepository = $shipperRepository;
    }
    public function index()
    {
    	$shippers = $this->shipperRepository->all();

    	
        if (!$shippers) {
            return Response::json([
                'message' => 'Shipper not found',
                'status' => false,
            ]);
        } else {
            return Response::json([
                'message' => 'success',
                'data' => $shippers,
                'status' => true,
            ]);
        }
    }
    public function store(Request $request)
    {
    	$input = $request->only('name', 'phone', 'address', 'status_id');

        if ($this->shipperRepository->create($input)) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'shipper not found',
                'status' => false,
            ]);
        }
    }
    public function show($id)
    {
        $shipper = $this->shipperRepository->find($id);

        if ($shipper) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $shipper,
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
        $shipper = $this->shipperRepository->find($id);
        
        if ($shipper) { 
            $input = $request->only('name', 'phone', 'address', 'status_id');
            $order = $this->shipperRepository->update($input, $id);

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
        $shipper = $this->shipperRepository->find($id);
        
        if ($shipper) { 
            $shipper = $this->shipperRepository->delete($id);

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
