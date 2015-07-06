<?php

include "app/core/conection.php";

if($_POST["name"]!="" && $_POST["lastname"]!="" && $_POST["address"]){
$sql="INSERT INTO client SET name=\"$_POST[name]\",lastname=\"$_POST[lastname]\",address=\"$_POST[address]\",phone=\"$_POST[phone]\",email=\"$_POST[email]\",created_at=NOW()";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=client-list\";</script>";
}
?>