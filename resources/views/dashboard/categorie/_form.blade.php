<div class="mb-3">
    <label for="tittle">Título</label>
    <input type="text" class="form-control" name="title" id="title" value="{{old('title', $categorie->title)}}">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="url_clean">Url Limpia</label>
    <input type="text" class="form-control" name="url_clean" id="url_clean" value="{{old('url_clean', $categorie->url_clean)}}">
  </div>
  <input type="submit" value="Enviar" class="btn btn-primary">