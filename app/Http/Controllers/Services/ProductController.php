<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepository;
use App\Http\Requests;
use Response;
use App\Models\Product;

class ProductController extends Controller
{	
	protected $productRepository;

	public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {	
    	$products = Product::with('productType')->get();
    	
        if (!$products) {
            return Response::json([
                'message' => 'Product not found',
                'status' => false,
            ]);
        } else {
            return Response::json([
                'message' => 'success',
                'data' => $products,
                'status' => true,
            ]);
        }
    }

    public function store(Request $request)
    {
        $input = $request->only('name', 'price', 'quantity', 'description', 'product_type_id', 'product_status_id', 'other_product_details', 'image');

        if ($this->productRepository->create($input)) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'Product not found',
                'status' => false,
            ]);
        }
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if ($product) { 
            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $product,
            ]);
        } else {
            return response()->json([
                'message' => 'Product not found',
                'status' => false,
            ]);
        }
    }

    public function update($id, Request $request)
    {
        $product = $this->productRepository->find($id);
        
        if ($product) { 
            $input = $request->only('name', 'price', 'quantity', 'description', 'product_type_id', 'product_status_id', 'other_product_details', 'image');
            $product = $this->productRepository->update($input, $id);

            return response()->json([
                'message' => 'success',
                'status' => true,
                'data' => $product,
            ]);
        } else {
            return response()->json([
                'message' => 'Product not found',
                'status' => false,
            ]);
        }
    }

    public function destroy($id)
    {
        $product = $this->productRepository->find($id);
        
        if ($product) { 
            $product = $this->productRepository->delete($id);

            return response()->json([
                'message' => 'success',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'Product not found',
                'status' => false,
            ]);
        }
    }
}
