<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        // Buscar todos os documentos
        $documents = Document::all();
        
        // Retornar a view com os documentos
        return view('dashboard.docs', compact('documents'));
    }
}
