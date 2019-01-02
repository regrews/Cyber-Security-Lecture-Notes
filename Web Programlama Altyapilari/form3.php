<?php
$deger=$_POST['username'];
if (!empty($deger)) {
	echo "Değişkende değer var!";
}
else
{
	echo "Değişkende Değer yok!";
}

echo "<br>";
$aranacak_yer=$_POST['comment'];
$aranacak_kelime='/öneri/';
if (preg_match($aranacak_yer, $aranacak_kelime)) {
	echo "bu bir öneridir.";
}
else
echo "öneri değildir.";
?>