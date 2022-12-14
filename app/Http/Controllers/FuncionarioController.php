<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FuncionarioModel;
use App\Models\ProdutoModel;

class FuncionarioController extends Controller
{
    private $objFuncionario, $objProduto;

    public function __construct()
    {
        $this->objFuncionario = new FuncionarioModel();
        $this->objProduto = new ProdutoModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionario = $this->objFuncionario->All();
        return view('modules.Funcionario.FuncionarioListar', compact('funcionario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.Funcionario.FuncionarioForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * -> A variavél $request recebe todos os dados vindo do POST do nosso formulário
     */
    public function store(Request $request)
    {
        /*
         * Fillable: medida de segurança do laravel, que permite apenas a inserção
         * de registros no banco de dados, casos as entidades sejam correspondidas as
         * presentes na model.
        */
        $this->objFuncionario->create([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'cpf'=>$request->cpf
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionario = $this->objFuncionario->find($id);
        return view('modules.Funcionario.FuncionarioExibir', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
