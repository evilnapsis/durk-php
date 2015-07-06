<?php

include "app/core/conection.php";

$sql="SELECT * FROM post";
$query=$con->query($sql);
if($query && $query->num_rows>0){
echo "<table border='1'>";
echo "<thead>";
echo "<th>id</th>";
echo "<th>title</th>";
echo "<th>content</th>";
echo "<th>category_id</th>";
echo "<th>created_at</th>";
echo "<th></th>
</thead>";
while($r=$query->fetch_object()){
echo "<tr>";
echo "<td>$r->id</td>";
echo "<td>$r->title</td>";
echo "<td>$r->content</td>";
echo "<td>$r->category_id</td>";
echo "<td>$r->created_at</td>";
echo "<td> <a href=\"index.php?view=post-edit&id=$r->id\">Editar</a> <a href=\"index.php?view=post-del&id=$r->id\">Eliminar</a></td>";
echo "</tr>";
}
echo "</table>";
}
else{
 echo "No hay resultados";}
?>