<?php
 function hesapla($sayi1=5,$islem="topla",$sayi2=3){
 	$sonuc=1;
 	switch ($islem) {
 		case 'topla':
 			$sonuc=$sayi1+$sayi2;
 			break;
 		case 'çarp':
 			$sonuc=$sayi1*$sayi2;
 			break;
		case 'çıkar':
			$sonuc=$sayi1-$sayi2;
			break;
		case 'böl':
			$sonuc=$sayi1/$sayi2;
			break;
		case 'üssü':
			for ($i=1; $i <=$sayi2; $i++) { 
			$sonuc*=$sayi1;
			}
			break;
		case 'mod':
			$sonuc=$sayi1%$sayi2;
			break;
 		default:
 			echo "Yanlış işlem girildi";
 			break;
 	}
 	return $sonuc;
 }

print hesapla();

?>