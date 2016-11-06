<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateShipmentRequest extends FormRequest
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
            'shipper_id', 
            'shipment_status_id' => 'required',
            'invoice_id' => 'required',
            'tracking_number' => 'required',
            'datetime_start' => 'required',
            'datetime_end' => 'required',
            'other_shipment_details' => 'required',
        ];
    }
}
