<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Product as ProductModel;

class ShoppingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
  public function rules()
    {
        return [
            'product' => ['required', 'max:255'],
            'company' => ['required', 'max:255'],
            'cost' => ['required'],
            'image' => ['nullable|image|max:2048'],

        ];
    }
}