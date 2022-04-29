@extends('layouts.master')

@section('content')
  @include('fragments.validation-errors')
  @include('fragments.sesion')
  <h1>CATEGORIAS</h1>
  <form method="CATEGORIE" action="{{route("categorie.update", $categorie->id)}}">
    @csrf
    @method("PUT")
    @include('dashboard.categorie._form')
  </form>

@endsection