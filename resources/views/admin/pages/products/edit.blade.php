@extends('admin.templates.app')
@section('title', 'Edição Produto')

@section('content')
    <h1>Editar Produto {{ $id }}</h1>
   
    <form action="{{route('products.update', [$id])}}" method="post">
        {{-- <input type="hidden" name="_method" value="put"> --}}
        @method('put')
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>
@endsection