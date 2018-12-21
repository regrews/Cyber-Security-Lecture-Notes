<?php
	$baglan=mysqli_connect("localhost","root","");
	$sec=mysqli_select_db($baglan,"okul");
	$ID=$_GET['OgrenciNo'];
	$sql="Delete from ogrenciler where OgrenciNo='".$ID."'";
	$sorgu=mysqli_query($baglan,$sql);
	echo("Başarıyla Silindi!");
	echo "<a href=\"ogrenciler.php\">Anasayfa</a>";
?>