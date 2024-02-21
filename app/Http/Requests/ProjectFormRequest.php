<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
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
            'nome_autore'=>'required|string|min:3|max:60',
            'titolo_progetto'=>'required|string|min:3|max:60',
            'img_riferimento'=>'string',
            'descrizione'=>'string|max:150',
            'data_pubblicazione'=>'required'
        ];
    }
    public function messages() {

        return [
            'nome_autore.required' => 'Il nome non può essere vuoto',
            'nome_autore.string' => 'Il nome deve essere una stringa',
            'nome_autore.min' => 'Il nome deve avere almeno 3 caratteri',
            'nome_autore.max' => 'Il nome deve avere massimo 60 caratteri',

            'titolo_progetto.required' => 'Il titolo non può essere vuoto',
            'titolo_progetto.string' => 'Il titolo deve essere una stringa',
            'titolo_progetto.min' => 'Il titolo deve avere almeno 3 caratteri',
            'titolo_progetto.max' => 'Il titolo deve avere massimo 60 caratteri',

            'img_riferimento.string' => "L'immagine deve essere una stringa",

            'descrizione.string' => 'La descrizione deve essere una stringa',
            'descrizione.max' => 'La descrizione deve avere massimo 150 caratteri',

            'data_pubblicazione.required' => 'La data non può essere vuota',
        ];
    }
}
