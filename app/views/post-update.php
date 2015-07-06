<?php

include "app/core/conection.php";

if($_POST["title"]){
$sql="UPDATE post SET title=\"$_POST[title]\",content=\"$_POST[content]\",category_id=$_POST[category_id] WHERE id = $_POST[id]";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=post-list\";</script>";
}
?>