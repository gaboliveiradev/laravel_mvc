<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = 'produto';
    use HasFactory;

    public function relFuncionario()
    {
        /*
         * Relacionando as FK, um produto é cadastrado por no máximo um funcionário (hasOne)
        */
        return $this->hasOne('App\Models\FuncionarioModel', 'id', 'id_funcionario');
    }
}
