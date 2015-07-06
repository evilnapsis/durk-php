<?php

function generate_list($tablename,$tabledata){
	echo "<li>[$tablename] Generando <a href='index.php?view=$tablename-list'>listado</a></li>";
$form="<?php\n";
$form .= "\ninclude \"app/core/conection.php\";\n\n";
$requireds = array();


$sql = "SELECT * FROM $tablename";
$fields = array();

foreach ($tabledata["fields"] as $fieldname =>$fielddata) {
	if($fielddata["type"]!="submit"){
		$fields[] = $fieldname;		
	}
}
$form .= "\$sql=\"".$sql."\";\n";

$form .= "\$query=\$con->query(\$sql);\n";
$form .= "if(\$query && \$query->num_rows>0){\n";
$form .= "echo \"<table border='1'>\";\n";
$form .="echo \"<thead>\";\n";
foreach ($fields as $field) {
$form .= "echo \"<th>$field</th>\";\n";
}
$form .="echo \"<th></th>\n</thead>\";\n";

$form .= "while(\$r=\$query->fetch_object()){\n";
$form .="echo \"<tr>\";\n";
foreach ($fields as $field) {
$form .= "echo \"<td>\$r->$field</td>\";\n";
}
$form .= "echo \"<td> <a href=\\\"index.php?view=$tablename-edit&id=\$r->id\\\">Editar</a> <a href=\\\"index.php?view=$tablename-del&id=\$r->id\\\">Eliminar</a></td>\";\n";
$form .="echo \"</tr>\";\n";
$form .= "}\n";
$form .= "echo \"</table>\";\n";
$form .= "}\nelse{\n echo \"No hay resultados\";}\n";

$form .="?>";

$f=fopen ("app/views/".$tablename."-list.php","w");
fwrite($f, $form);
fclose($f);

}


?>