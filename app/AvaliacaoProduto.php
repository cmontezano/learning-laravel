<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoProduto extends Model
{
    protected $fillable = array(
        'produto_id',
        'nota',
        'comentario'
    );
}
