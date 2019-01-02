<?php
$ad_soyad=$_POST["ad"];
$mail=$_POST["mail"];
$cinsiyet=$_POST["cinsiyet"];
$yurtdisi=$_POST["ydisi"];

echo "Adınız Soyadınız : ".$ad_soyad;
echo "<br>";
echo("Mail Adresiniz :".$mail);
echo "<br>";
$bolum=$_POST['bolum'];
echo "bölümünüz" . $bolum ."</br>";
if ($cinsiyet=="kadin") {
echo "Cinsiyetiniz : Kadın";
}
else
echo "Cinsiyetiniz : Erkek ";

echo "<br>";
if ($yurtdisi) {
	echo "Daha önce yurtdışına <b>çıkmışsınız</b>.";
}
else
echo "Daha önce yurtdışına <b>çıkmamışsınız <b>.";
?>