<?php

function generate_conection($config){

	$data = "<?php\n";
	$data .= "\$con = new mysqli(\"$config[host]\",\"$config[user]\",\"$config[password]\",\"$config[db]\");\n";
	$data .="?>";
$f=fopen ("app/core/conection.php","w");
fwrite($f, $data);
fclose($f);
echo "<li>Archivo de conexion generado</li>";
}


?>