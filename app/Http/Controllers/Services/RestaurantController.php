<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Restaurant\RestaurantRepository;
use App\Repositories\County\CountyRepository;
use Response;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    protected $restaurantRepository;
    protected $countyRepository;
	public function __construct(RestaurantRepository $restaurantRepository, CountyRepository $countyRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
        $this->countyRepository = $countyRepository;
    }
    public function index()
    {
    	$restaurants = Restaurant::with('county','owner')->get();
        if (!$restaurants) {
            return Response::json([
                'message' => 'Restaurant not found',
                'status' => false,
            ]);
        } else {
            return Response::json([
                'message' => 'success',
                'data' => $restaurants,
                'status' => true,
            ]);
        }
    }
    public function store(Request $request)
    {
    	$input = $request->only('name', 'county_id', 'owner_id', 'phone', 'email', 'address', 'description');

        if ($this->restaurantRepository->create($input)) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'Restaurant not found',
                'status' => false,
            ]);
        }
    }
    public function show($id)
    {
        $restaurant = $this->restaurantRepository->find($id);

        if ($restaurant) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $restaurant,
            ]);
        } else {
            return response()->json([
                'message' => 'Restaurant item not found',
                'status' => false,
            ]);
        }
    }

    public function update($id, Request $request)
    {
        $restaurant = $this->restaurantRepository->find($id);
        
        if ($restaurant) { 
            $input = $request->only('name', 'county_id', 'owner_id', 'phone', 'email', 'address', 'description');
            $order = $this->restaurantRepository->update($input, $id);

            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $order,
            ]);
        } else {
            return response()->json([
                'message' => 'Restaurant not found',
                'status' => false,
            ]);
        }
    }
    public function destroy($id)
    {
        $restaurant = $this->restaurantRepository->find($id);
        
        if ($restaurant) { 
            $restaurant = $this->restaurantRepository->delete($id);

            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'Restaurant not found',
                'status' => false,
            ]);
        }
    }
}
