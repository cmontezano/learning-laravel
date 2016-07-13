<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        return view('produtos.index', ['produtos' => Produto::all()]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request)
    {
        Produto::create($request->all());

        return redirect('produtos');
    }
}
