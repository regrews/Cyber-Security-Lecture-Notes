<html>
	<head>
		<title>
		</title>
	</head>
	<body>
			<?php
				//$ogrenciler = array("Emin","Murat","Ali" );
				$ogrenciler[]="Emin";
				$ogrenciler[]="Murat";
				$ogrenciler[]="Ali";
				$ogrenciler[]="Mehmet";

				for ($i=0; $i < count($ogrenciler); $i++) {//Dizini For döngüsü ile yazılması.
					echo ($i+1).". Öğrenci :".$ogrenciler[$i]."</br>";
				}
				echo "</br>";
				$ogr=count($ogrenciler);
				$sayac=0;
				while ($sayac  < $ogr) {//Dizini While döngüsü ile yazılması.
					echo ($sayac+1).". Öğrenci :".$ogrenciler[$sayac]."</br>";
					$sayac++;
				}
				echo "</br>";
				foreach ($ogrenciler as $key => $value) {//Dizini Foreach döngüsü ile yazılması.
					print(($key+1). ". öğrenci = $value</br>");
				}

				sort($ogrenciler);//Diziyi alfabeye göre sıralayan fonksiyon.
				echo "</br>";
				foreach ($ogrenciler as $key => $value) {
					print(($key+1). ". öğrenci = $value</br>");
				}
				echo "</br>";
				$yeni =array_push($ogrenciler, "Ahmet","Ayşe","Fatma");
				print("\$ogrenciler adlı dizide $yeni adet degisken var.");
				echo "</br>";

				//merge 
				$ogrrenciler2= array("Hasan","Hüseyin","Veli");
				$yeni_ogr=array_merge($ogrenciler,$ogrrenciler2);
				echo "</br>";
				foreach ($yeni_ogr as $key => $value) {
					print(($key+1). ". öğrenci = $value</br>");
				}
			?>
	</body>
</html>




