<?php
Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('produtos', 'ProdutosController@index');
    Route::get('produtos/create', 'ProdutosController@create');
    Route::post('produtos/store', 'ProdutosController@store');
    Route::post('produtos/{id}/destroy', 'ProdutosController@destroy');
});
