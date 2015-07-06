<?php

include "app/core/conection.php";

$sql="SELECT * FROM category";
$query=$con->query($sql);
if($query && $query->num_rows>0){
echo "<table border='1'>";
echo "<thead>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>created_at</th>";
echo "<th></th>
</thead>";
while($r=$query->fetch_object()){
echo "<tr>";
echo "<td>$r->id</td>";
echo "<td>$r->name</td>";
echo "<td>$r->created_at</td>";
echo "<td> <a href=\"index.php?view=category-edit&id=$r->id\">Editar</a> <a href=\"index.php?view=category-del&id=$r->id\">Eliminar</a></td>";
echo "</tr>";
}
echo "</table>";
}
else{
 echo "No hay resultados";}
?>