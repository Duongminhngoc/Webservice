<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Shipment\ShipmentRepository;
use App\Http\Requests;
use App\Http\Requests\CreateShipmentRequest;
use App\Http\Requests\UpdateShipmentRequest;
use Session;

class ShipmentController extends Controller
{
    protected $shipmentRepository;
	public function __construct(ShipmentRepository $shipmentRepository)
    {
        $this->shipmentRepository = $shipmentRepository;
    }
    public function index()
    {	
    	$shipments = $this->shipmentRepository->all();
    	return view('admin.shipment.index', compact('shipments'));
    }
    public function create()
    {
    	return view('admin.shipment.create');
    }
    public function store(CreateShipmentRequest $request)
    {
        $input = $request->only('shipper_id', 'shipment_status_id', 'invoice_id', 'tracking_number', 'datetime_start', 'datetime_end', 'other_shipment_details');
        $shipment = $this->shipmentRepository->create($input);
        Session::flash('msg', trans('shipment.create_shipment_successfully'));

        return redirect(route('shipment.index'));
    }
    public function edit($id)
    {
        $shipment = $this->shipmentRepository->find($id);
        return view('admin.shipment.edit', compact('shipment'));
    }
    public function update($id, UpdateShipmentRequest $request)
    {
        $shipment = $this->shipmentRepository->find($id);
        if (empty($shipment)) {
            Session::flash('msg', trans('shipment.shipment_not_found'));
            return redirect(route('shipment.index'));
        }
        $input = $request->only('shipper_id', 'shipment_status_id', 'invoice_id', 'tracking_number', 'datetime_start', 'datetime_end', 'other_shipment_details');
        $shipment = $this->shipmentRepository->update($input, $id);
        Session::flash('msg', trans('shipment.update_shipment_successfully'));

        return redirect(route('shipment.index'));
    }
    public function show($id)
    {
        $shipment = $this->shipmentRepository->find($id);
        return view('admin.shipment.show', compact('shipment'));
    }
    public function destroy($id)
    {
        $shipment = $this->shipmentRepository->find($id);
        if (empty($shipment)) {
            Session::flash('msg', trans('shipment.shipment_not_found'));
            return redirect(route('shipment.index'));
        }
        $this->shipmentRepository->delete($id);
        Session::flash('msg', trans('shipment.delete_shipment_successfully'));

        return redirect(route('shipment.index'));
    }
}
