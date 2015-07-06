<?php

include "app/core/conection.php";

$sql="select * from client where id=$_GET[id]";
$query = $con->query($sql);
$client_obj = null;
while($r=$query->fetch_object()){ $client_obj = $r; break; }
?>
<form method="post" name="client" action="index.php?view=client-update">
<input type='hidden' name='id' value='<?php echo $client_obj->id; ?>'>
	<div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type='text' name='name' value='<?php echo $client_obj->name; ?>' id='name' required >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Apellido</label>
    <input type='text' name='lastname' value='<?php echo $client_obj->lastname; ?>' id='lastname' required >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Direccion</label>
    <textarea name='address' id='address' required ><?php echo $client_obj->address; ?></textarea>
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type='text' name='phone' value='<?php echo $client_obj->phone; ?>' id='phone'  >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type='text' name='email' value='<?php echo $client_obj->email; ?>' id='email'  >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">submit</label>
    <input type='submit' value='Actualizar'>
  </div>
</form>