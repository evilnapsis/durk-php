<?php

include "app/core/conection.php";

$sql="DELETE FROM client WHERE id=$_GET[id] ";
$query=$con->query($sql);
echo "<script>window.location=\"index.php?view=client-list\";</script>";?>