<?php
	$baglan=mysqli_connect("localhost","root","");
	$sec=mysqli_select_db($baglan,"okul");
	//mysqli_query($baglan,"set name utf8");
	$baglan->set_charset("utf8");
	if ($sec) {
	echo "<br>";
	$sql="select * from ogrenciler Where OgrenciNo=".$_GET['OgrenciNo'];
	$sorgu=mysqli_query($baglan,$sql);
	$alan_sayisi=mysqli_num_fields($sorgu);
	echo "<table border=1>";
	$satir=mysqli_fetch_row($sorgu);
		
		print("<tr><td>".$satir[0]."</td><td>".$satir[1]."</td><td>".$satir[2]."</td><td>".$satir[3]."</td><td>".$satir[4]."</td><td>".$satir[5]."</td><td>".$satir[6]."</td></tr>");
		/*for ($s=1;$s<$alan_sayisi;$s++) { 
			$dizi [$i] [$s] =$satir[$s];
		}
		for ($i-1;$i<=count($dizi);$i++) { 
			print $dizi[$i][1].$dizi [$i][3]."<br>";
		}*/
	
	echo "</table>";
	mysqli_close($baglan);
		}
		echo "<a href=\"ogrenciler.php\">Anasayfa</a>";

?>

