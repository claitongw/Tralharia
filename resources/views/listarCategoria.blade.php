@extends('layouts.default')

@section('title', 'Listar Categorias')

@section('content')

  <div>
    <h3>Listando Categorias Cadastradas</h3>
    <table class="table table-striped table-bordered table-hover table-condensed">
      <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
      </tr>
      </thead>

      <tbody>
      @foreach($categoria as $categoria)
        <tr>
          <td width=100px;>{{$categoria->idcategoria}}</td>
          <td>{{$categoria->nome}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

@endsection