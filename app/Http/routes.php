<?php
Route::group(array('middleware' => 'web', 'prefix' => 'produtos'), function () {
    Route::get('', 'ProdutosController@index');
    Route::get('create', 'ProdutosController@create');
    Route::post('store', 'ProdutosController@store');
    Route::get('{id}/destroy', 'ProdutosController@destroy');
    Route::get('{id}/edit', 'ProdutosController@edit');
    Route::put('{id}/update', 'ProdutosController@update');
});
