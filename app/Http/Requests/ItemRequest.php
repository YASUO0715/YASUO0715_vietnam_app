<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'name_kana' => 'required|string|max:50',
            'campany_name' => 'required|string|min:1',
            // 'category_id' => 'required|integer',
            'image_url' => 'required|active_url',
            'pr' => 'required|string|min:1',
            'price' => 'required|integer'
        ];
    }
}
