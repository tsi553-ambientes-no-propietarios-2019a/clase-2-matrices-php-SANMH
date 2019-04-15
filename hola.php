<?php

$nombre1   = "Adriana";
$apellido1 = "Ortiz";
$edad = 31;
$arr = array("Pedro", "Duarte", 32);
$arr1 = array("Diana", "Medina", 12);



echo "<table>";
echo "<table border=2>";

echo "<tr>";
echo "  <th> Nombre  </th>";
echo "  <th> Apellido </th>";
echo "  <th> Edad </th>";
echo "</tr>";

echo "<tr>";
echo "<td> " . $nombre1 . "</td>";
echo "<td> " . $apellido1 . "</td>";
echo "<td> " . $edad . "</td>";
echo "</tr>";

echo "<tr>  <td>" . $arr[0] . "</td> 
<td>" . $arr[1] ."</td>  <td>" . $arr[2] . "</td> </tr>";

echo "<tr> <td>" . $arr1[0] . "</td> 
<td>" . $arr1[1] ."</td> <td>" .$arr1[2] . "</td> </tr>";

echo "</table>";

?>