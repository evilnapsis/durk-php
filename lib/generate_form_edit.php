<?php

function generate_form_edit($tablename,$tabledata){
	echo "<li>[$tablename] Generando <a href='index.php?view=#'>formularios de editar</a></li>";
	$form = "";
	$action = "action=\"index.php?view=".$tablename."-update\"";
$form .= "<?php\n";
$form .= "\ninclude \"app/core/conection.php\";\n\n";
$form .= "\$sql=\"select * from $tablename where id=\$_GET[id]\";\n";
$form .= "\$query = \$con->query(\$sql);\n";
$form .= "\$".$tablename."_obj = null;\n";
$form .= "while(\$r=\$query->fetch_object()){ \$".$tablename."_obj = \$r; break; }\n";
$form .= "?>\n";
	$form .= "<form method=\"".$tabledata["config"]["method"]."\" name=\"".$tablename."\" $action>\n";
foreach ($tabledata["fields"] as $fieldname =>$fielddata) {

	if($fielddata["type"]!="ai_pk" && $fielddata["type"]!="now"){
	$label = $fieldname;
	$field="";
	$required = "";
	$placeholder = "";
	if(isset($fielddata["label"])){ $label=$fielddata["label"]; }
	if(isset($fielddata["required"]) && $fielddata["required"]==true){ $required="required"; }
	if(isset($fielddata["placeholder"])){ $placeholder="placeholder=\"".$fielddata["placeholder"]."\""; }
	$field = "<input type='text' name='$fieldname' value='<?php echo \$".$tablename."_obj->$fieldname; ?>' id='$fieldname' $required $placeholder>";
	if(isset($fielddata["field"]) && $fielddata["field"]=="textarea"){
		$field="<textarea name='$fieldname' id='$fieldname' $required $placeholder><?php echo \$".$tablename."_obj->$fieldname; ?></textarea>";
	}
	if($fielddata["type"]=="submit"){
	$field = "<input type='submit' value='Actualizar'>";
	}
$form .= <<<AAA
	<div class="form-group">
    <label for="exampleInputEmail1">$label</label>
    $field
  </div>\n
AAA;
}else{
	if($fieldname=="id"){
		$form .= "<input type='hidden' name='id' value='<?php echo \$".$tablename."_obj->$fieldname; ?>'>\n";
	}

}
}

$form .= "</form>";;

$f=fopen ("app/views/".$tablename."-edit.php","w");
fwrite($f, $form);
fclose($f);

}


?>