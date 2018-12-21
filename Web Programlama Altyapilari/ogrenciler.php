<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<meta charset="UTF-8"/>
</head>
<body>
<?php
	$baglan=mysqli_connect("localhost","root","");
	$sec=mysqli_select_db($baglan,"okul");
	//mysqli_query($baglan,"set name utf8");
	$baglan->set_charset("utf8");
	if ($sec) {
	echo "<br>";
	$sql="select * from ogrenciler";
	$sorgu=mysqli_query($baglan,$sql);
	$alan_sayisi=mysqli_num_fields($sorgu);
	$i=0;
	echo "<table border=1>";
	while ($satir=mysqli_fetch_row($sorgu)) {
		$i++;
		print("<tr><td>".$satir[0]."</td><td>".$satir[1]."</td><td>".$satir[2]."</td><td><a href=\"ogrenci_sil.php?OgrenciNo=".$satir[0]."\">Sil</a></td><td><a href=\"ogrenci_duzenle.php?OgrenciNo=".$satir[0]."\">Duzenle</a></td><td><a href=\"ogrenci_goster.php?OgrenciNo=".$satir[0]."\">Göster</a></td></tr>");
		/*for ($s=1;$s<$alan_sayisi;$s++) { 
			$dizi [$i] [$s] =$satir[$s];
		}
		for ($i-1;$i<=count($dizi);$i++) { 
			print $dizi[$i][1].$dizi [$i][3]."<br>";
		}*/
	}
	echo "</table>";
	mysqli_close($baglan);
		}

?>
<a href="ogrenci_ekle.html">Yeni öğrenci ekle</a>
</body>
</html>
