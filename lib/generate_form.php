<?php

function generate_form($tablename,$tabledata){
	echo "<li>[$tablename] Generando <a href='index.php?view=$tablename-addform'>formularios de agregar</a></li>";
	$form = "";
	$action = "action=\"index.php?view=".$tablename."-add\"";
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
	$field = "<input type='text' name='$fieldname' id='$fieldname' $required $placeholder>";
	if(isset($fielddata["field"]) && $fielddata["field"]=="textarea"){
		$field="<textarea name='$fieldname' id='$fieldname' $required $placeholder></textarea>";
	}
	if($fielddata["type"]=="submit"){
	$field = "<input type='submit' value='".$fielddata["value"]."'>";
	}
$form .= <<<AAA
	<div class="form-group">
    <label for="exampleInputEmail1">$label</label>
    $field
  </div>\n
AAA;
}
}

$form .= "</form>";;

$f=fopen ("app/views/".$tablename."-addform.php","w");
fwrite($f, $form);
fclose($f);

}


?>