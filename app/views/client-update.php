<?php

include "app/core/conection.php";

if($_POST["name"]!="" && $_POST["lastname"]!="" && $_POST["address"]){
$sql="UPDATE client SET name=\"$_POST[name]\",lastname=\"$_POST[lastname]\",address=\"$_POST[address]\",phone=\"$_POST[phone]\",email=\"$_POST[email]\" WHERE id = $_POST[id]";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=client-list\";</script>";
}
?>