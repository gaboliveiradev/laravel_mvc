<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncionarioModel extends Model
{

    protected $table = 'funcionario';
    use HasFactory;

    /*
     * Fillable: medida de segurança do laravel, que permite apenas a inserção
     * de registros no banco de dados, casos as entidades sejam correspondidas as
     * presentes na model.
    */
    protected $fillable = ['nome', 'email', 'cpf'];

    public function relProduto()
    {
        /*
         * Relacionando as FK, um Funcionário pode cadastrar vários produtods (hasMany)
        */
        return $this->hasMany('App\Models\ProdutoModel', 'id_funcionario');
    }
}
