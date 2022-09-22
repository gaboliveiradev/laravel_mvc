@extends('templates.estrutura')

@section('title') Laravel MVC | Formulário de Funcionário @endsection

@section('content')
    <h1 class="text-center">Cadastrar Funcionários</h1> <hr>

    <div class="col-8 m-auto">
        <form name="formFuncionario" id="formFuncionario" action="{{url('funcionario')}}" method="post" class="row g-3">
            @csrf <!-- Fornece segurança contra possíveis ataques -->
            <div class="col-md-6">
                <label class="form-label">Nome</label>
                <input name="nome" id="nome" value="" type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">CPF</label>
                <input name="cpf" id="cpf" value="" type="text" class="form-control">
            </div>
            <div class="col-md-12">
                <label class="form-label">Email</label>
                <input name="email" id="email" value="" type="email" class="form-control">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
@endsection