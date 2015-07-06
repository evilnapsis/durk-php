<?php

include "app/core/conection.php";

if($_POST["title"]){
$sql="INSERT INTO post SET title=\"$_POST[title]\",content=\"$_POST[content]\",category_id=$_POST[category_id],created_at=NOW()";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=post-list\";</script>";
}
?>