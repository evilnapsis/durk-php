<?php

include "app/core/conection.php";

if($_POST["name"]){
$sql="INSERT INTO category SET name=\"$_POST[name]\",created_at=NOW()";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=category-list\";</script>";
}
?>