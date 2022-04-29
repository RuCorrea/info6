@extends('layouts.master')

@section('content')
  <h1>CATEGORIAS</h1>

  <a href="{{ route('categorie.create') }}" class="btn btn-dark">Create</a>

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Url</th>
        <th scope="col" colspan="2">Options</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $categorie)
        <tr>
          <th scope="row">{{ $categorie->id}}</th>
          <td>{{$categorie-> title}}</td>
          <td>{{$categorie-> url_clean}}</td>
          <td>
            <a href="{{route ('categorie.edit',$categorie->id)}}" class="btn btn-info">Edit</a>
          </td>
          <td>
              <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{$categorie->id}}" type="submit" class="btn-danger">Delete</button>
          </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>

  <div class="mt-3">{{ $categories->links() }}</div>

  <div class="modal fade" id="deleteModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de borrar el registro seleccionado?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form id="formDelete" action="{{route('categorie.destroy', 0)}}" method="categorie">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <script>

    var deteleModal = document.getElementById('deleteModal')
deleteModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var id = button.getAttribute('data-id')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = deleteModal.querySelector('.modal-title')

  var action = formDelete.getAttribute('action').slice(0, -1) + id;

  formDelete.setAttribute('action', action)

  modalTitle.textContent = 'categorie ' + id
}

@endsection