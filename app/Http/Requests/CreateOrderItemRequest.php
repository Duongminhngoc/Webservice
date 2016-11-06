<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_id' => 'required', 
            'order_id' => 'required', 
            'order_item_status_code' => 'required', 
            'quantity' => 'required', 
            'price' => 'required', 
            'details' => 'required',
        ];
    }
}
