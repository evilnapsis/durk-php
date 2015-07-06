<?php

include "app/core/conection.php";

$sql="select * from category where id=$_GET[id]";
$query = $con->query($sql);
$category_obj = null;
while($r=$query->fetch_object()){ $category_obj = $r; break; }
?>
<form method="post" name="category" action="index.php?view=category-update">
<input type='hidden' name='id' value='<?php echo $category_obj->id; ?>'>
	<div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type='text' name='name' value='<?php echo $category_obj->name; ?>' id='name' required >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">submit</label>
    <input type='submit' value='Actualizar'>
  </div>
</form>