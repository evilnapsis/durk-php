<?php

include "app/core/conection.php";

$sql="DELETE FROM post WHERE id=$_GET[id] ";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=post-list\";</script>";?>