<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncionarioModel extends Model
{
    protected $table = 'funcionario';
    use HasFactory;

    public function relProduto()
    {
        /*
         * Relacionando as FK, um Funcionário pode cadastrar vários produtods (hasMany)
        */
        return $this->hasMany('App\Models\ProdutoModel', 'id_funcionario');
    }
}
