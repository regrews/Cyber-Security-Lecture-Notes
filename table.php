<html>
	<head></head>
	<body>
		<?php
			echo "<table border=1>";
			for ($i=0; $i <5; $i++) { 
				echo "<tr>";
				for ($j=0; $j <3 ; $j++) { 
					echo "<td>";
					echo ($i+1).". satır ".($j+1)." sütun";
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>

	</body>
</html>