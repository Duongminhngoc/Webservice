<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepository;
use App\Http\Requests;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Session;

class ProductController extends Controller
{	
	protected $productRepository;
	public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function index(Request $request)
    {	
        $array = json_decode(file_get_contents('http://localhost:8080/foodanddrink/public/services/product'), true);
        $products = collect($array['data']);

    	return view('admin.product.index', compact('products'));
    }
    public function create()
    {
    	return view('admin.product.create');
    }
    
    public function edit($id)
    {
        $array = json_decode(file_get_contents("http://localhost:8080/foodanddrink/public/services/product/$id"), true);
        $product = collect($array['data']);

        return view('admin.product.edit', compact('product'));
    }

    public function show($id)
    {
        $array = json_decode(file_get_contents("http://localhost:8080/foodanddrink/public/services/product/$id"), true);
        $product = collect($array['data']);

        return view('admin.product.show_fields', compact('product'));
    }
}
