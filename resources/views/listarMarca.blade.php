@extends('layouts.default')

@section('title', 'Listar Marcas')

@section('content')

    <div>
        <h3>Listando Marcas Cadastradas</h3>
        <table class="table table-striped table-bordered table-hover table-condensed">
            <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Nacionalidade</th>
            </tr>
            </thead>

            <tbody>
            @foreach($marca as $mar)
                <tr>
                    <td width=100px;>{{$mar->id}}</td>
                    <td>{{$mar->nome}}</td>
                    <td>{{$mar->nacionalidade}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$mar->nacionalidade}}

    </div>

@endsection