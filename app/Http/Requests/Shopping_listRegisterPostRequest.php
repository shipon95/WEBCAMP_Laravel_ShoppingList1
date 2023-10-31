<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Shopping_list as Shopping_listModel;

class Shopping_listRegisterPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
  public function rules()
    {
        return [
            'name' => ['required', 'max:128'],

        ];
    }
}