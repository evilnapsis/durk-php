<?php

include "app/core/conection.php";

if($_POST["name"]){
$sql="UPDATE category SET name=\"$_POST[name]\" WHERE id = $_POST[id]";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=category-list\";</script>";
}
?>