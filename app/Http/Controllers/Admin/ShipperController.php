<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Shipper\ShipperRepository;
use App\Http\Requests;
use App\Http\Requests\CreateShipperRequest;
use App\Http\Requests\UpdateShipperRequest;
use Session;

class ShipperController extends Controller
{
	protected $shipperRepository;
	public function __construct(ShipperRepository $shipperRepository)
    {
        $this->shipperRepository = $shipperRepository;
    }
    public function index()
    {	
    	$shippers = $this->shipperRepository->all();
    	return view('admin.shipper.index', compact('shippers'));
    }
    public function create()
    {
        return view('admin.shipper.create');
    }
    public function store(CreateShipperRequest $request)
    {
        $input = $request->only('name', 'phone', 'address', 'status_id');
        $shipper = $this->shipperRepository->create($input);
        Session::flash('msg', trans('shipper.create_shipper_successfully'));

        return redirect(route('shipper.index'));
    }
    public function edit($id)
    {
        $shipper = $this->shipperRepository->find($id);
        return view('admin.shipper.edit', compact('shipper'));
    }
    public function update($id, UpdateShipperRequest $request)
    {
        $shipper = $this->shipperRepository->find($id);
        if (empty($shipper)) {
            Session::flash('msg', trans('shipper.shipper_not_found'));
            return redirect(route('shipper.index'));
        }
        $input = $request->only('name', 'phone', 'address', 'status_id');
        $shipper = $this->shipperRepository->update($input, $id);
        Session::flash('msg', trans('shipper.update_shipper_successfully'));

        return redirect(route('shipper.index'));
    }
    public function show($id)
    {
        $shipper = $this->shipperRepository->find($id);
        return view('admin.shipper.show', compact('shipper'));
    }
    public function destroy($id)
    {
        $shipper = $this->shipperRepository->find($id);
        if (empty($shipper)) {
            Session::flash('msg', trans('shipper.shipper_not_found'));
            return redirect(route('shipper.index'));
        }
        $this->shipperRepository->delete($id);
        Session::flash('msg', trans('shipper.delete_shipper_successfully'));

        return redirect(route('shipper.index'));
    }
}
