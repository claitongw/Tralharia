@extends('layouts.default')

@section('title', 'Listar Promoções')

@section('content')

    <div>
        <h3>Listando Promoções Cadastradas</h3>
        @foreach($promo as $prom)
            {{$prom->nome }} -> {{$prom->marca->nome }}<br />
        @endforeach
    </div>

@endsection