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
        $cardsPortfolio = [
            [
                'imagem' => 'assets/img/portfolio/app-1.jpg',
                'titulo' => 'App 1',
                'categoria' => 'Aplicativo 1',
                'filtro' => 'filter-app'
            ],
            [
                'imagem' => 'assets/img/portfolio/app-2.jpg',
                'titulo' => 'App 2',
                'categoria' => 'Aplicativo 2',
                'filtro' => 'filter-app'
            ],
            [
                'imagem' => 'assets/img/portfolio/product-1.jpg',
                'titulo' => 'Product 1',
                'categoria' => 'Product 1',
                'filtro' => 'filter-product'
            ],
            [
                'imagem' => 'assets/img/portfolio/branding-1.jpg',
                'titulo' => 'Branding 1',
                'categoria' => 'Branding 1',
                'filtro' => 'filter-branding'
            ],
            [
                'imagem' => 'assets/img/portfolio/books-1.jpg',
                'titulo' => 'Books 1',
                'categoria' => 'Livro 1',
                'filtro' => 'filter-books'
            ],
            [
                'imagem' => 'assets/img/portfolio/product-2.jpg',
                'titulo' => 'Product 2',
                'categoria' => 'Product 2',
                'filtro' => 'filter-product'
            ],
            [
                'imagem' => 'assets/img/portfolio/branding-2.jpg',
                'titulo' => 'Branding 2',
                'categoria' => 'Branding 2',
                'filtro' => 'filter-branding'
            ],
            [
                'imagem' => 'assets/img/portfolio/books-2.jpg',
                'titulo' => 'Books 2',
                'categoria' => 'Livro 2',
                'filtro' => 'filter-books'
            ],
            [
                'imagem' => 'assets/img/portfolio/app-3.jpg',
                'titulo' => 'App 3',
                'categoria' => 'Aplicativo 3',
                'filtro' => 'filter-app'
            ],
            [
                'imagem' => 'assets/img/portfolio/product-3.jpg',
                'titulo' => 'Produto 3',
                'categoria' => 'Produto 3',
                'filtro' => 'filter-product'
            ],
            [
                'imagem' => 'assets/img/portfolio/branding-3.jpg',
                'titulo' => 'Branding 3',
                'categoria' => 'Branding 3',
                'filtro' => 'filter-branding'
            ],
            [
                'imagem' => 'assets/img/portfolio/books-3.jpg',
                'titulo' => 'Books 3',
                'categoria' => 'Livro 3',
                'filtro' => 'filter-books'
            ]
        ];

        return view('portfolio', ['cards' => $cardsPortfolio]);
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