<?php
namespace App\Repositories\Product;

use Auth;
use App\Models\Product;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use Hash;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }
    public function create($request)
    {
        if(isset($request['image'])) {
            $fileName = $this->uploadImage(null);
        } else {
            $fileName = "default.jpg";
        }

        return Product::create([
        	'product_type_id' => $request['product_type_id'],
        	'product_status_id' => $request['product_status_id'],
            'name' => $request['name'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'description' => $request['description'],
            'image' => $fileName,
            'other_product_details' => $request['other_product_details'],
        ]);
    }

    public function update($inputs, $id)
    {
        try {
            if (isset($inputs['image'])) {
                $image = $this->uploadImage($inputs['image']);
                $inputs['image'] = $image;
            } else {
                unset($inputs['image']);
            }
            $data = $this->model->where('id', $id)->update($inputs);
        } catch (Exception $e) {
            return view('product')->withError(trans('message.update_error'));
        }
        if (!$data) {
            throw new Exception(trans('message.update_error'));
        }
        return $data;
    }

    public function uploadImage($oldImage)
    {
        $file = Input::file('image');
        $destinationPath = base_path() . trans('product.image_path');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        Input::file('image')->move($destinationPath, $fileName);

        if (!empty($oldImage) && file_exists($oldImage)) {
            File::delete($oldImage);
        }

        return $fileName;
    }
}
