<?php

namespace App\Http\Requests\Common;

use App\Abstracts\Http\FormRequest;

class Item extends FormRequest
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
        $picture = 'nullable';

        if ($this->request->get('picture', null)) {
            $picture = 'mimes:' . config('filesystems.mimes') . '|between:0,' . config('filesystems.max_size') * 1024;
        }

        return [
            // 'name' => 'required|string',
            // 'model' => 'required|string',
            'name' => 'required|string',
            'make'=>'required|string',
            'year' => 'required|string',
            'color'=> 'required|string',
            'vin' => 'required|string',
            'lotno' =>'required|string',
            'location' => 'required|string',
            'site' => 'required|string',
            'odo' => 'required|string',
            'enginetype' =>'required|string',
            'drive' => 'required|string',
            'keystatus' =>'required|string',
            'start' =>'required|string',
            'sale_price' => 'required',
            'purchase_price' => 'required',
            'tax_ids' => 'nullable|array',
            'category_id' => 'nullable|integer',
            'enabled' => 'integer|boolean',
            'picture' => $picture,
        ];
    }
}
