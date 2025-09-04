<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contato()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}