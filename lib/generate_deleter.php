<?php

function generate_deleter($tablename,$tabledata){
	echo "<li>[$tablename] Generando backend de eliminar</li>";
$form="<?php\n";
$form .= "\ninclude \"app/core/conection.php\";\n\n";

$sql = "DELETE FROM $tablename WHERE id=\$_GET[id] ";

$form .= "\$sql=\"".$sql."\";\n";

$form .= "\$query=\$con->query(\$sql);\n";
$form .= "echo \"<script>window.location=\\\"index.php?view=$tablename-list\\\";</script>\";";


$form .="?>";

$f=fopen ("app/views/".$tablename."-del.php","w");
fwrite($f, $form);
fclose($f);

}


?>