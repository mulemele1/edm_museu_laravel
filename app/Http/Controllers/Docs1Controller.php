<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class Docs1Controller extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('dashboard.docs_1', compact('forms'));
    }

    public function edit($id)
    {
        $form = Form::findOrFail($id);
        return view('dashboard.edit_1', compact('form'));
    }

    public function update(Request $request, $id)
    {
        $form = Form::findOrFail($id);
        $form->update($request->all());
        return redirect()->route('docs_1.index')->with('success', 'Documento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();
        return redirect()->route('docs_1.index')->with('success', 'Documento deletado com sucesso!');
    }
}
