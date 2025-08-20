<?php

namespace Modules\Bien\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BienFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'titre' => ['required', 'min:1'],
            'description' => ['nullable'],
            'surface' => ['required', 'integer', 'min:1'],
            'pieces' => ['required', 'integer', 'min:1'],
            'chambres' => ['required', 'integer', 'min:1'],
            'etage' => ['required', 'integer', 'min:0'],
            'ville' => ['required', 'min:2'],
            'adresse' => ['required', 'min:2'],
            'vendre' => ['boolean', 'required'],
            'prix' => ['integer', 'required'],
            'disponible' => ['required', 'boolean'],
            'files.*' => ['file', 'mimes:jpg,jpeg,png', 'max:10000'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
