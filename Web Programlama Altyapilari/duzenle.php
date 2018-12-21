<?php
$baglan=mysqli_connect("localhost","root","");
	$sec=mysqli_select_db($baglan,"okul");
	$baglan->set_charset("utf8");
	$Id=$_POST['Id'];
	$adi=$_POST['name'];
	$soyadi=$_POST['surname'];
	$mail=$_POST['mail'];
	if ($_POST['cinsiyet']=="kadin") {
	$cinsiyet="Kadın";
		}
	else
	$cinsiyet="Erkek";
	$dogum=$_POST['dogum'];
	$telefon=$_POST['telefon'];

	$sql="Update ogrenciler set Ad='".$adi."',Soyad='".$soyadi."',E_mail='".$mail."',Cinsiyet='".$cinsiyet."',DogumYer='".$dogum."',Telefon='".$telefon."' Where OgrenciNo=".$Id."";
	$sorgu=mysqli_query($baglan,$sql);
	if($sorgu) echo "kayıt başarıyla Guncellenmiştir!</br>";
	else echo "Kayıt eklenemedi!!!</br>";

	mysqli_close($baglan);	
	echo "<a href=\"ogrenciler.php\">Anasayfa</a>";

?>