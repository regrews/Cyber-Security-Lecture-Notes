<?php
echo "<table border=1>";
$ogrenciler = array("Ahmet","Talha","Memet");
$notlar = array(10,20,30);
echo("<table border=1>");
for ($i=0; $i <3 ; $i++) { 
	echo("<tr>");
	echo "<td>".$ogrenciler[$i]."</td>";
	echo "<td>".$notlar[$i]."</td>";
	echo("</tr>");

}
echo "</table>";

?>
