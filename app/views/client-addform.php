<form method="post" name="client" action="index.php?view=client-add">
	<div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type='text' name='name' id='name' required >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Apellido</label>
    <input type='text' name='lastname' id='lastname' required >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Direccion</label>
    <textarea name='address' id='address' required ></textarea>
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type='text' name='phone' id='phone'  >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type='text' name='email' id='email'  >
  </div>
	<div class="form-group">
    <label for="exampleInputEmail1">submit</label>
    <input type='submit' value='Agregar'>
  </div>
</form>