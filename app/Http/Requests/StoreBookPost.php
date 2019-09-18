<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookPost extends FormRequest
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
            'name'          => [
                'required',
                'string',
                'unique:books,name',
                'max:256',
            ],
            'pages'         => [
                'required',
                'numeric',
            ],
            'isbn'         => [
                'required',
                'string',
                'size:10'
            ],
            'price'        => [
                'required',
                'numeric',
            ],
            'published_at'   => [
                'required',
                'date',
            ],
        ];
    }
}
