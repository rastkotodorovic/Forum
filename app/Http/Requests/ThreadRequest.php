<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ThreadRequest extends FormRequest
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
            'title' => 'required|string|min:5',
            'category_id' => 'required|integer|exists:categories,id',
            'body' => 'required|string|min:3',
            'user_id' => 'required|integer|exists:users,id',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => Auth::id(),
        ]);
    }
}
