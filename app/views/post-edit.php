<?php

include "app/core/conection.php";

$sql="select * from post where id=$_GET[id]";
$query = $con->query($sql);
$post_obj = null;
while($r=$query->fetch_object()){ $post_obj = $r; break; }
?>
<form method="post" name="post" action="index.php?view=post-update">
<input type='hidden' name='id' value='<?php echo $post_obj->id; ?>'>
	<div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type='text' name='title' value='<?php echo $post_obj->title; ?>' id='title' required >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Contenido</label>
    <textarea name='content' id='content'  ><?php echo $post_obj->content; ?></textarea>
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
    <input type='text' name='category_id' value='<?php echo $post_obj->category_id; ?>' id='category_id'  >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">submit</label>
    <input type='submit' value='Actualizar'>
  </div>
</form>