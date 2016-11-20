<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\County;
use App\Models\Product;
use App\Models\Restaurant;
use App\Http\Requests;
use Response;
use Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = County::all();
        $restaurant1=$countries[0]->restaurants->toArray();
        //$i=0;
        //dd($restaurant1[][]);
        $restaurants=Restaurant::limit(12)->get();
        $products=Product::limit(12)->get();
        return view('home.home',compact('countries','restaurants','products','restaurant1'));
    }
    public function admin()
    {
        return view('admin');
    }
    public function ajaxRestaurant(Request $request,$country_id){
        $restaurants=Restaurant::where('county_id','=',$country_id)->get();
        return Response::json($restaurants);
    }
    
}
