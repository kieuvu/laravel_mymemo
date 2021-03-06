<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class PostRequest extends FormRequest
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
            'title' => "required|string",
            'image' => "mimes:jpeg,jpg,png,gif|required",
            'tags'  => "required|string"
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator));
    }
}
