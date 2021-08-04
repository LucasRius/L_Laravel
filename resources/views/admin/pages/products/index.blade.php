@extends('admin.templates.app')

@section('title', 'Gestao de Produtos')


@section('content')
 {{-- Aula 24 --}}

<a href="{{route('products.create')}}">Cadastrar</a>



<hr>

  <h1>Exibindo os produtos</h1> 


@component('admin.components.card')
    @slot('title')
        <h1>Titulo card</h1>
    @endslot
    Um card de exemplo
@endcomponent

  <hr>
    @include('admin.includes.alerts', ['content' => 'Alerta dos produtos'])

{{-- aula 27 --}}
<hr>
    @if (isset($products))
        @foreach ($products as $item)
            <p>{{$item}}</p>
        @endforeach
        
    @endif

  <hr>

    @forelse ($products2 as $item)
        <p>{{$item}}</p>
    @empty
       <p>Nao existe produtos</p> 
    @endforelse
{{-- Aula 26 --}}
  <hr>
    @if ($teste === '123')
         É igual
    @elseif($teste == 123)
        É igual a 123
    @else
        É diferente
    @endif

    @unless ($teste === '123')
        sdfsdf       
    @else
        gfdgdf
    @endunless

    @isset($teste2)
       <p>{{$teste2}}</p> 
    @endisset
 
    @empty($teste3)
        <p>Vazio...</p>
    @endempty

    @auth
        Autenticado
    @else
        Nao autenticado
    @endauth

    @guest
        <p>Nao autenticado</p>
    @endguest

    @switch($teste)
        @case(123)
            <p>É 123</p>
            @break
        @case(2)
            É 2
            @break
        @default
            Oloko
    @endswitch
    {{-- Aula 25 --}}
@endsection

@push('styles')
    <style>
        .last{background: rgb(184, 30, 30);}
    </style>
@endpush

@push('scripts')
    <script></script>
@endpush

{{-- Aula 28 --}}