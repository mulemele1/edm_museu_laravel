<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFormularioRequest;
use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function list(Request $request)
    {
        // Filtra os formulários pelo nome do objeto, se houver uma busca
        $formularios = Formulario::where('nome_objeto', 'LIKE', "%{$request->search}%")->get();
        return view('formularios/list', compact('formularios'));
    }

    public function show($id)
    {
        // Busca o formulário pelo ID, se não existir, redireciona para a lista
        if (!$formularios = Formulario::find($id))
            return redirect()->route('formularios.list');
        return view('formularios/show', compact('formulario'));
    }

    public function create()
    {
        return view('formularios.create');
    }

    public function store(StoreUpdateFormularioRequest $request)
{
    // Dados validados
    $data = $request->validated();

    // Processar a imagem, se existir
    if ($request->hasFile('foto')) {
        $data['foto'] = $request->file('foto')->store('fotos', 'public');
    }

    // Cria o formulário no banco de dados
    $formulario = Formulario::create($data);

    return redirect()->route('formularios.list')->with('success', 'Formulário criado com sucesso!');
}

public function edit($id)
{
    // Busca o formulário pelo ID, se não existir, redireciona para a lista
    if (!$formulario = Formulario::find($id))
        return redirect()->route('formularios.list');
    return view('formularios/edit', compact('formulario'));
}

public function update(StoreUpdateFormularioRequest $request, $id)
{
    // Busca o formulário pelo ID, se não existir, redireciona para a lista
    if (!$formulario = Formulario::find($id))
        return redirect()->route('formularios.list');

    // Dados validados
    $data = $request->validated();

    // Processar a imagem, se existir
    if ($request->hasFile('foto')) {
        $data['foto'] = $request->file('foto')->store('fotos', 'public');
    }

    // Atualiza o formulário no banco de dados
    $data = $request->all();
    $formulario->update($data);

    return redirect()->route('formularios.list')->with('success', 'Formulário atualizado com sucesso!');
}

    public function delete($id)
    {
        // Busca o formulário pelo ID, se não existir, redireciona para a lista
        if (!$formulario = Formulario::find($id))
            return redirect()->route('formularios.list');

        // Exclui o formulário
        $formulario->delete();

        return redirect()->route('formularios.list')->with('success', 'Formulário excluído com sucesso!');
    }


    public function details_form($id)
    {
        // Busca o formulário pelo ID, se não existir, redireciona para a lista
    if (!$formulario = Formulario::find($id))
    return redirect()->route('formularios.list');
return view('formularios/edit', compact('formulario'));
}

}