    <div class="mb-3">
      <label for="tittle">Título</label>
      <input type="text" class="form-control" name="tittle" id="title" value="{{old('title')}}">
      <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="url_clean">Url Limpia</label>
      <input type="text" class="form-control" name="url_clean" id="url_clean" value="{{old('url_clean')}}">
    </div>
    <div class="mb-3">
      <label for="content">Contenido</label>
      <textarea class="form-control" id="content" name="content" rows="3" >{{old('content')}}</textarea>
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary">