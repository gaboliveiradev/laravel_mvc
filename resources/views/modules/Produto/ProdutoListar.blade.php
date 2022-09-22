@extends('templates.estrutura')
@section('title') Laravel MVC | Listar Produtos @endsection

@section('content')
    <h1 class="text-center">Produtos</h1> <hr>

    <div class="col-8 m-auto">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">QUANTIDADE</th>
          <th scope="col">PREÇO</th>
          <th scope="col">CADASTRADO POR</th>
          <th class="text-center" scope="col">AÇÃO</th>
        </tr>
      </thead>

      <tbody>
        @foreach($produto as $item)
          @php
            $funcionario = $produto->find($item->id)->relFuncionario;
          @endphp
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nome}}</td>
            <td>{{$item->quantidade}}</td>
            <td>{{$item->preco}}</td>
            <td class="text-center">{{$funcionario->nome}}</td>
            <td class="text-center">
              <a href="" class="btn btn-dark">Visualizar</a>
              <a href="" class="btn btn-primary">Editar</a>
              <a href="" class="btn btn-danger">Deletar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection