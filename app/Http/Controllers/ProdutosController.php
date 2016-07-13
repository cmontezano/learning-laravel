<?php
namespace App\Http\Controllers;

class ProdutosController extends Controller
{
    public function index()
    {
        $nome = 'Carlos';
        return view('produtos', ['nome' => $nome]);
    }
}