<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Shipment\ShipmentRepository;
use Response;

class ShipmentController extends Controller
{
    protected $shipmentRepository;
	public function __construct(shipmentRepository $shipmentRepository)
    {
        $this->shipmentRepository = $shipmentRepository;
    }
    public function index()
    {
    	$shipments = $this->shipmentRepository->all();

    	
        if (!$shipments) {
            return Response::json([
                'message' => 'Shipment not found',
                'status' => false,
            ]);
        } else {
            return Response::json([
                'message' => 'success',
                'data' => $shipments,
                'status' => true,
            ]);
        }
    }
    public function store(Request $request)
    {
    	$input = $request->only('shipper_id', 'shipment_status_id', 'invoice_id', 'tracking_number', 'datetime_start', 'datetime_end', 'other_shipment_details');

        if ($this->shipmentRepository->create($input)) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'shipment not found',
                'status' => false,
            ]);
        }
    }
    public function show($id)
    {
        $shipment = $this->shipmentRepository->find($id);

        if ($shipment) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $shipment,
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
        $shipment = $this->shipmentRepository->find($id);
        
        if ($shipment) { 
            $input = $request->only('shipper_id', 'shipment_status_id', 'invoice_id', 'tracking_number', 'datetime_start', 'datetime_end', 'other_shipment_details');
            $order = $this->shipmentRepository->update($input, $id);

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
        $shipment = $this->shipmentRepository->find($id);
        
        if ($shipment) { 
            $shipment = $this->shipmentRepository->delete($id);

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
