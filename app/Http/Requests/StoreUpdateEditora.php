<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEditora extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required | max: 100 | min 3',
            'local' => 'required | max: 500 | min 10',
            'site' => 'required | max: 50 | min 10',
            'email' => 'required | max: 50 | min 10'
        ];
    }
}
