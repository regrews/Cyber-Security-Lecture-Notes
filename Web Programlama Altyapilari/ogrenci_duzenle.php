<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$baglan=mysqli_connect("localhost","root","");
	$sec=mysqli_select_db($baglan,"okul");
	$baglan->set_charset("utf8");
	if ($sec) {
	echo "<br>";
	$sql="select * from ogrenciler Where OgrenciNo=".$_GET['OgrenciNo']."";
	$sorgu=mysqli_query($baglan,$sql);
	$alan_sayisi=mysqli_num_fields($sorgu);
	$satir=mysqli_fetch_row($sorgu);
	mysqli_close($baglan);
		}

?>
	<form method="POST" action="duzenle.php">
	<table>
				<tr>
				<td>
					<input type="hidden" name="Id" value="<?php echo $satir['0']?>">
				</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="name" placeholder="Adınız :" value="<?php echo $satir['1']?>"  />
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="surname" placeholder="Soyadınız :" value="<?php echo $satir['2']?>"/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="mail" placeholder="Mail Adresiniz" value="<?php echo $satir['3']?>"/>
					</td>
				</tr>
				<tr>
					<td>
						Cinsiyet Seçiniz : 
						Kadın :<input type="radio" name="cinsiyet" value="kadin" checked="" /> 
						Erkek :<input type="radio" name="cinsiyet" value="erkek"  />
					</td>
					
				</tr>
				<tr>
					<td>
						<select name="dogum">
									<option value="istanbul">İstanbul</option>
									<option value="izmir">İzmir</option>
									<option value="ankara">Ankara</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="telefon" maxlength="10" placeholder="telefon" value="<?php echo $satir['6']?>"/>
					</td>
				</tr>
				
			</table>
			<input type="submit" value="Gönder" >
			</form>

</body>
</html>