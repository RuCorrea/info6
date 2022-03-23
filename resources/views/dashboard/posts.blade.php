@extends('layouts.master')

@section('content')
  @include('fragments.validation-errors')
  @include('fragments.sesion')
  <h1>Post</h1>
  <form method="POST" action="{{route('post.store')}}">
    @csrf
    <div class="form-group">
      <label for="tittle">Título</label>
      <input type="text" class="form-control" name="tittle" id="title">
      <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
    </div>
    <div class="form-group">
      <label for="url_clean">Url Limpia</label>
      <input type="text" class="form-control" name="url_clean" id="url_clean">
    </div>
    <div class="form-group">
      <label for="content">Contenido</label>
      <textarea class="form-control" id="content" name="content" rows="3" ></textarea>
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary">
  </form>  
@endsection