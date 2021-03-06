<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Produto;

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

        return redirect()->route('produtos');
    }

    public function destroy($id)
    {
        Produto::find($id)->delete();

        return redirect()->route('produtos');
    }

    public function edit($id)
    {
        $produto = Produto::find($id);

        return view('produtos.edit', compact('produto'));
    }

    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::find($id)->update($request->all());

        return redirect()->route('produtos');
    }
}
