<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules()
    {
      return [
        'name' => 'required|min:3|max:64|regex:/^[a-z0-9áéíóúàèìòùäëïöüñ\s]+$/i',
        'email' => ['required','email','max:255', Rule::unique('users')->ignore($this->id)],
        'password' => 'required_without:id',
        'password_confirmation' => 'required_without:id|same:password'
      ];
    }

    public function messages()
    {
      return [
        'name.required' => 'El nombre es obligatorio',
        'name.min' => 'El mínimo de caracteres permitidos para el nombre son 3',
        'name.max' => 'El máximo de caracteres permitidos para el nombre son 64',
        'name.regex' => 'Sólo se aceptan letras para el nombre',
        'email.required' => 'El email es obligatorio',
        'email.email' => 'El formato de email es incorrecto',
        'email.max' => 'El máximo de caracteres permitidos para el email son 255',
        'email.unique' => 'El email ya existe',
        'password.required_without' => 'La contraseña es obligatoria',
        'password_confirmation.required_without' => 'Añada la confirmación de la contraseña',
        'password_confirmation.same' => 'Las contraseñas no coinciden'
      ];
    }
}
