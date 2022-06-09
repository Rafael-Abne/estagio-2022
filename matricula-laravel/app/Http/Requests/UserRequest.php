<?php

namespace App\Http\Requests;

use App\Role;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'min:3'
            ],
            'cpf' => [
                'nullable'
            ],
            'email_address' => [
                'nullable', 'email'
            ],
            'instagram' => [
                'nullable'
            ],
            'facebook' => [
                'nullable'
            ],
            'phone' => [
                'required'
            ],
            'email' => $this->route()->user ? 'nullable': 'required|unique:users',
            'role_id' => [
                'required', 'exists:'.(new Role)->getTable().',id'
            ],
            'password' => [
                $this->route()->user ? 'nullable' : 'required', 'confirmed', 'min:6'
            ]
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'role_id' => 'role',
        ];
    }
}
