@extends('templates.estrutura')
@section('title') Laravel MVC | Visualizar Funcionário @endsection

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto tex-center">
        <div class="card">
            <div class="card-header">
                <strong> #00{{$funcionario->id}} - Funcionário </strong>
            </div>
            <div class="card-body">
                <p class="card-text">Nome: {{$funcionario->nome}}</p>
                <p class="card-text">Email: {{$funcionario->email}}</p>
                <p class="card-text">CPF: {{$funcionario->cpf}}</p>
                <a href="/funcionario" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </div>
@endsection