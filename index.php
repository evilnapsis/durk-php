<html>
	<head>
		<title>DURK - CRUD GENERATOR</title>
	</head>
	<body>
		<h1>WELLCOME TO DURK</h1>
		<p>Generacion de CRUD Automatizada con PHP</p>
		<?php 
		if(!isset($_GET["view"])){
				include "durk.php";
			}else{
				include "app/views/".$_GET["view"].".php";
			}

		 ?>
		<p>Evilnapsis &copy; 2015</p>
	</body>
</html>