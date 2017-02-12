<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewcomerRequest extends FormRequest
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
            'name'  => 'required|max:255',
            'email' => 'required|email|unique:newcomers|max:255'
        ];
    }

    /**
     * Messages to return in the event of an error.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'  => config('messages.name_required'),
            'email.required' => config('messages.email_required'),
            'email.unique'   => config('message.email_unique')
        ];
    }
}
