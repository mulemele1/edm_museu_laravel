<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFormularioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Permite que qualquer usuário faça a requisição
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // Campos obrigatórios
            'nome_objeto' => 'required|string|max:255',
            'quantidade' => 'required|integer|min:1', // Definido um valor mínimo de 1 para quantidade
            'ano_fabrico' => 'required|integer|min:1900|max:' . date('Y'),
            'funcionalidade' => 'required|string|max:255',
            'caracteristicas' => 'required|string',
            'fabricante' => 'required|string|max:255',
            'constituicao' => 'required|string|max:255',
            'localizacao' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'data' => 'required|date', // Assegura que a data seja válida
            'inventariador' => 'required|string|max:255',

            // Foto é opcional, mas se fornecida, deve ser uma imagem com limite de tamanho e formato
            'foto' => 'required', // 2MB no máximo
        ];
    }

    public function messages()
{
    return [
        'nome_objeto.required' => 'O campo Nome do Objeto é obrigatório.',
        'quantidade.required' => 'O campo Quantidade é obrigatório.',
        'quantidade.min' => 'A quantidade mínima é 1.',
        'ano_fabrico.required' => 'O campo Ano de Fabrico é obrigatório.',
        'ano_fabrico.min' => 'O ano de fabrico deve ser maior ou igual a 1900.',
        'ano_fabrico.max' => 'O ano de fabrico não pode ser no futuro.',
        'foto.image' => 'O arquivo deve ser uma imagem.',
        'foto.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg, gif ou svg.',
        'foto.max' => 'A imagem não pode ter mais de 2MB.',
    ];
}

}