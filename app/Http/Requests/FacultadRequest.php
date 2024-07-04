<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacultadRequest extends FormRequest
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
             "nombre_facultad" => "required|unique:facultades|max:10"
        ];
    }

    public function messages()
    {
        return [
            "nombre_facultad.required" => "El input facultad es obligatorio.",
            "nombre_facultad.unique" => "NO se permite duplicidad de datos!",
            "nombre_facultad.max" => "La cantidad de caracteres supera al máximo!"
        ];
    }
}
