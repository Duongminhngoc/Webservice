<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Restaurant\RestaurantRepository;
use App\Http\Requests;
use App\Http\Requests\CreateRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Session;
use App\Repositories\County\CountyRepository;
use App\Repositories\User\UserRepository;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    protected $restaurantRepository;
	public function __construct(RestaurantRepository $restaurantRepository, CountyRepository $countyRepository, UserRepository $userRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
        $this->countyRepository = $countyRepository;
        $this->userRepository = $userRepository;
    }
    public function index()
    {	
        $array = json_decode(file_get_contents('http://localhost:8080/foodanddrink/public/services/restaurant'), true);
        $restaurants = collect($array['data']);
        dd($restaurants);
        // $restaurants = Restaurant::with('county')->get();
    	return view('admin.restaurant.index', compact('restaurants'));
    }
    public function create()
    {
        $counties = $this->countyRepository->getCounties();
        $users = $this->userRepository->getUsers();

    	return view('admin.restaurant.create', compact('counties', 'users'));
    }
    public function store(CreateRestaurantRequest $request)
    {
        $input = $request->only('name', 'county_id', 'owner_id', 'phone', 'email', 'address', 'description');
        $restaurant = $this->restaurantRepository->create($input);
        Session::flash('msg', trans('restaurant.create_restaurant_successfully'));

        return redirect(route('restaurant.index'));
    }
    public function edit($id)
    {
        $restaurant = $this->restaurantRepository->find($id);
        $counties = $this->countyRepository->getCounties();
        $users = $this->userRepository->getUsers();

        return view('admin.restaurant.edit', compact('restaurant', 'counties', 'users'));
    }
    public function update($id, UpdateRestaurantRequest $request)
    {
        $restaurant = $this->restaurantRepository->find($id);
        if (empty($restaurant)) {
            Session::flash('msg', trans('restaurant.restaurant_not_found'));
            return redirect(route('restaurant.index'));
        }
        $input = $request->only('name', 'county_id', 'owner_id', 'phone', 'email', 'address', 'description');
        $restaurant = $this->restaurantRepository->update($input, $id);
        Session::flash('msg', trans('restaurant.update_restaurant_successfully'));

        return redirect(route('restaurant.index'));
    }
    public function show($id)
    {
        $restaurant = $this->restaurantRepository->find($id);
        return view('admin.restaurant.show', compact('restaurant'));
    }
    public function destroy($id)
    {
        $restaurant = $this->restaurantRepository->find($id);
        if (empty($restaurant)) {
            Session::flash('msg', trans('restaurant.restaurant_not_found'));
            return redirect(route('restaurant.index'));
        }
        $this->restaurantRepository->delete($id);
        Session::flash('msg', trans('restaurant.delete_restaurant_successfully'));

        return redirect(route('restaurant.index'));
    }
}
