
<?php
include "lib/autoload.php";
if(file_exists("schema.php")){
	include "schema.php";
	if(isset($config) && isset($schema)){
		echo "<p>Base de datos <b>$config[db]</b></p>";
		echo "<ul>";
		generate_conection($config);
		generate_sql($config,$schema);
		foreach ($schema as $tablename =>$tabledata) {
			generate_form($tablename,$tabledata);
			generate_adder($tablename,$tabledata);
			generate_list($tablename,$tabledata);
			generate_deleter($tablename,$tabledata);
		}
		echo "<li>Finalizado</li>";
		echo "</ul>";

	}
}


?>