<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryItem;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //Galeria
    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
{
    // Validação dos dados
    $validatedData = $request->validate([
        'nome_objeto' => 'required|string|max:255',
        'quantidade' => 'required|integer|min:1',
        'ano_fabrico' => 'required|year',
        'funcionalidade' => 'required|string',
        'caracteristicas' => 'required|string',
        'fabricante' => 'required|string|max:255',
        'constituicao' => 'required|string',
        'localizacao' => 'required|string|max:255',
        'estado' => 'required|string|max:50',
        'data' => 'required|date',
        'inventariador' => 'required|string|max:100',
        'foto' => 'nullable|file|image|max:2048'
    ]);

    // Processar a foto se existir
    if ($request->hasFile('foto')) {
        $filename = time() . '.' . $request->foto->extension();
        $request->foto->storeAs('public/gallery', $filename);
        $validatedData['foto'] = $filename;
    }

    // Salvar no banco de dados
    $galleryItem = GalleryItem::create($validatedData);

    return redirect('/gallery_form')
               ->with('success', 'Formulário processado com sucesso!')
               ->with('galleryItem', $galleryItem);
}
}
