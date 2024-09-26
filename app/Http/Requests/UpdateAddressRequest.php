<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'street' => ['required', 'max:200'],
            'colony' => ['required', 'max:200'],
            'number' => ['nullable', 'max:50'],
            'city' => ['nullable', 'max:200'],
            'contact_id' => ['required']
        ];
    }
}
