    <div class="mb-3">
      <label for="tittle">Título</label>
      <input type="text" class="form-control" name="title" id="title" value="{{old('title', $post->title)}}">
      <div id="emailHelp" class="form-text">Huevos</div>
    </div>
    <div class="mb-3">
      <label for="url_clean">Url Limpia</label>
      <input type="text" class="form-control" name="url_clean" id="url_clean" value="{{old('url_clean', $post->url_clean)}}">
    </div>
    <div class="mb-3">
      <label for="content">Contenido</label>
      <textarea class="form-control" name="content" id="content" rows="3" >{{old('content', $post->content)}}</textarea>
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary">