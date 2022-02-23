<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'Title' => ['required', 'min:3','unique:posts'],
            'Description' => ['required', 'min:10'],
            'user_id'=>'exist:p'
        ];
    }

    public function messages()
    {
        return [
            'Title.required' => 'Title  Required ',
            'Title.min' => ' you must enter more than  3 characters '
        ];
    }
}
