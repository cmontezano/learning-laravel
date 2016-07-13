<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        return view('produtos', ['produtos' => Produto::all()]);
    }
}