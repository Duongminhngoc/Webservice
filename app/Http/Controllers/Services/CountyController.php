<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\County\CountyRepository;
use Response;
use App\Models\Country;

class CountyController extends Controller
{
	protected $countyRepository;
	public function __construct(CountyRepository $countyRepository)
    {
        $this->countyRepository = $countyRepository;
    }
    public function index()
    {
    	$counties = $this->countyRepository->all();
        if (!$counties) {
            return Response::json([
                'message' => 'County not found',
                'status' => false,
            ]);
        } else {
            return Response::json([
                'message' => 'success',
                'data' => $counties,
                'status' => true,
            ]);
        }
    }
    public function show($id)
    {
        $county = $this->countyRepository->find($id);

        if ($county) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $county,
            ]);
        } else {
            return response()->json([
                'message' => 'County item not found',
                'status' => false,
            ]);
        }
    }
}
