<?php

function generate_adder($tablename,$tabledata){
	echo "<li>[$tablename] Generando backend de agregar</li>";
$form="<?php\n";
$form .= "\ninclude \"app/core/conection.php\";\n\n";
$requireds = array();
$method=strtoupper($tabledata["config"]["method"]);
foreach ($tabledata["fields"] as $fieldname =>$fielddata) {
	if(isset($fielddata["required"])&&$fielddata["required"]==true){
		$requireds[]="\$_".$method."[\"".$fieldname."\"]";
	}
}

if(count($requireds)>0){
	$form .= "if(";
	$form .= implode("!=\"\" && ", $requireds);
	$form.="){\n";
}

$sql = "INSERT INTO $tablename SET ";
$fields = array();
foreach ($tabledata["fields"] as $fieldname =>$fielddata) {
	if($fielddata["type"]!="ai_pk" && $fielddata["type"]!="submit" && $fielddata["type"]!="now"){
		if($fielddata["type"]=="int"){
			$fields[] = $fieldname."="."\$_".$method."[".$fieldname."]";
		}else{
			$fields[] = $fieldname."="."\\\"\$_".$method."[".$fieldname."]\\\"";
		}
	}else if($fielddata["type"]=="now"){
		$fields[] = $fieldname."="."NOW()";		
	}
}
$sql.= implode(",", $fields);
$form .= "\$sql=\"".$sql."\";\n";

$form .= "\$query=\$con->query(\$sql);\n";
$form .= "echo \"<script>window.location=\\\"index.php?view=$tablename-list\\\";</script>\";";
if(count($requireds)>0){
	$form .= "\n}\n";
}


$form .="?>";

$f=fopen ("app/views/".$tablename."-add.php","w");
fwrite($f, $form);
fclose($f);

}


?>