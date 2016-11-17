<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepository;
use App\Http\Requests;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Session;
use App\Models\ProductType;

class ProductController extends Controller
{	
	protected $productRepository;
	public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function index(Request $request)
    {	
        //$array = json_decode(file_get_contents(url('/').'/services/product'), true);
        //$products = collect($array['data']);
        //dd($products);
        $i=1;
        $products = $this->productRepository->all();
    	return view('admin.product.index', compact('products','i'));
    }
    public function create()
    {
    	return view('admin.product.create');
    }
    
    public function edit($id)
    {
        //$array = json_decode(file_get_contents(url('/')."/services/product/$id"), true);
        //$product = collect($array['data']);
        $product = $this->productRepository->find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function show($id)
    {
        $array = json_decode(file_get_contents(url('/')."/services/product/$id"), true);
        $product = collect($array['data']);

        return view('admin.product.show_fields', compact('product'));
    }
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);
        if (empty($product)) {
            Session::flash('msg', trans('product.product_not_found'));
            return redirect(route('product.index'));
        }
        $this->productRepository->delete($id);
        Session::flash('msg', trans('product.delete_product_successfully'));

        return redirect(route('product.index'));
    }
}
