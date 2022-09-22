@extends('templates.estrutura')
@section('title') Laravel MVC | Lista de Funcionários @endsection

@section('content')
  <h1 class="text-center">Funcionários</h1> <hr>

  <div class="col-8 m-auto">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">CPF</th>
          <th class="text-center" scope="col">AÇÃO</th>
        </tr>
      </thead>

      <tbody>
        @foreach($funcionario as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nome}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->cpf}}</td>
            <td class="text-center">
              <a href="{{url("funcionario/$item->id")}}" class="btn btn-dark">Visualizar</a>
              <a href="" class="btn btn-primary">Editar</a>
              <a href="" class="btn btn-danger">Deletar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection