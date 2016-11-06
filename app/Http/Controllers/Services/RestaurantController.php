<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Restaurant\RestaurantRepository;
use Response;

class RestaurantController extends Controller
{
    protected $restaurantRepository;
	public function __construct(restaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }
    public function index()
    {
    	$restaurants = $this->restaurantRepository->all();

    	
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
                'message' => 'restaurant not found',
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
                'message' => 'Order item not found',
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
                'message' => 'Order not found',
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
                'message' => 'Order not found',
                'status' => false,
            ]);
        }
    }
}