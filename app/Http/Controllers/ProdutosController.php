<?php
namespace App\Http\Controllers;

class ProdutosController extends Controller
{
    public function index()
    {
        $dados = ['ola' => 'Mundo'];
        return $dados;
    }
}