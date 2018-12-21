<?php
	$baglan=mysqli_connect("localhost","root","");
	$sec=mysqli_select_db($baglan,"okul");
	$baglan->set_charset("utf8");
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

	$sql="insert into ogrenciler (Ad,Soyad,E_mail,Cinsiyet,DogumYer,Telefon) values ('".$adi."','".$soyadi."','".$mail."','".$cinsiyet."','".$dogum."','".$telefon."')";
	$sorgu=mysqli_query($baglan,$sql);
	if($sorgu) echo "kayıt başarıyla eklenmiştir!</br>";
	else echo "Kayıt eklenemedi!!! </br>";

	mysqli_close($baglan);	
	echo "<a href=\"ogrenciler.php\">Anasayfa</a>";
?>