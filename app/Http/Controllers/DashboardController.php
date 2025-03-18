<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->notifications;

        return view('dashboard.index', compact('notifications'));
    }

    public function handleButtonClick(Request $request)
    {
        // Faça qualquer processamento necessário aqui

        return response()->json(['success' => true]);
    }
}
