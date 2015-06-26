<?php

include "app/core/conection.php";

$sql="DELETE FROM category WHERE id=$_GET[id] ";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=category-list\";</script>";?>