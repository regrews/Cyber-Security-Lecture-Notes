<?php
$today=getdate();
print $today['mday']."-".$today['mon']."-".$today['year'];
echo "<br>";
print date("d-m-y");
echo "<br>";
echo "-------------------------------------------<br>";
$today=getdate(time());
print $today['mday']."-".$today['mon']."-".$today['year'];
echo "<br>";
print date("d-m-y",time());
echo "<br>";
echo "-------------------------------------------<br>";
$yesterday=getdate(time()-24*60*60);
print $yesterday['mday']."-".$yesterday['mon']."-".$yesterday['year'];
echo "<br>";
print date("d-m-y",time()-24*60*60);
echo "<br>-------------------------------------------<br>";
$tomorrow=getdate(time()+24*60*60);
print $tomorrow['mday']."-".$tomorrow['mon']."-".$tomorrow['year'];
echo "<br>";
print date("d-m-y",time()+24*60*60);
echo "<br>	-------------------------------------------<br>";
$Ongunsonra=getdate(time()+24*60*60*10);
print $Ongunsonra['mday']."-".$Ongunsonra['mon']."-".$Ongunsonra['year'];
echo "<br>";
print date("d-m-y,z",time()+24*60*60);

?>
