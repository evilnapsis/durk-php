<?php

include "app/core/conection.php";

$sql="SELECT * FROM client";
$query=$con->query($sql);
if($query && $query->num_rows>0){
echo "<table border='1'>";
echo "<thead>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>lastname</th>";
echo "<th>address</th>";
echo "<th>phone</th>";
echo "<th>email</th>";
echo "<th>created_at</th>";
echo "<th></th>
</thead>";
while($r=$query->fetch_object()){
echo "<tr>";
echo "<td>$r->id</td>";
echo "<td>$r->name</td>";
echo "<td>$r->lastname</td>";
echo "<td>$r->address</td>";
echo "<td>$r->phone</td>";
echo "<td>$r->email</td>";
echo "<td>$r->created_at</td>";
echo "<td> <a href=\"index.php?view=client-edit&id=$r->id\">Editar</a> <a href=\"index.php?view=client-del&id=$r->id\">Eliminar</a></td>";
echo "</tr>";
}
echo "</table>";
}
else{
 echo "No hay resultados";}
?>