<form method="post" name="post" action="index.php?view=post-add">
	<div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type='text' name='title' id='title' required >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Contenido</label>
    <textarea name='content' id='content'  ></textarea>
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
    <input type='text' name='category_id' id='category_id'  >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">submit</label>
    <input type='submit' value='Agregar'>
  </div>
</form>