@extends('templates.estrutura')
@section('title') Laravel MVC | Lista de Funcionários @endsection

@section('content')
    <h1 class="text-center">Funcionários</h1> <hr>

    <div class="col-8 m-auto">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">CPF</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
    </div>
@endsection