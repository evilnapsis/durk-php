<?php

function generate_sql($config,$schema){

	$data = "create database $config[db];\n";
	$data .= "use $config[db];\n\n";
	foreach ($schema as $tablename => $tabledata) {
		$data .= "CREATE TABLE $tablename (\n";
		$fields = array();
		foreach($tabledata["fields"] as $fieldname => $fielddata){
			if($fielddata["type"]!="submit"){
				$type ="";
				if($fielddata["type"]=="varchar"){
					$type = "varchar($fielddata[size])";
				}else if($fielddata["type"]=="now"){
					$type = "datetime";
				}else if($fielddata["type"]=="ai_pk"){
					$type = "int not null auto_increment primary key";
				}else{
					$type = $fielddata["type"];
				}
				$fields[]= $fieldname." ".$type;
			}
		}
		$data.= implode(",\n",$fields)."\n);\n\n";
	}
$f=fopen ("schema.sql","w");
fwrite($f, $data);
fclose($f);
echo "<li>SQL Generado</li>";
}

?>