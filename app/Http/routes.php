<?php
Route::group(array(
    'middleware' => 'web',
    'prefix' => 'produtos',
    'where' => ['id' => '[0-9]+']), function () {
    
    Route::get('', ['as' => 'produtos', 'uses' => 'ProdutosController@index']);
    
    Route::get('create', ['as' => 'produtos.create', 'uses' => 'ProdutosController@create']);
    
    Route::post('store', ['as' => 'produtos.store', 'uses' => 'ProdutosController@store']);
    
    Route::get('{id}/destroy', ['as' => 'produtos.destroy', 'uses' => 'ProdutosController@destroy']);
    
    Route::get('{id}/edit', ['as' => 'produtos.edit', 'uses' => 'ProdutosController@edit']);
    
    Route::put('{id}/update', ['as' => 'produtos.update', 'uses' => 'ProdutosController@update']);
});
