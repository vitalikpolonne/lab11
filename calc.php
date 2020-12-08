<?php
$h= $_GET['h'];
$t= $_GET['t'];
echo "При h=$h,<br>t=$t<br>";
$z=($h+sin($t+4*$h))/pow($h,2)+$t;
echo "Результат становить $z";
$exampleFile = fopen("vitalik.txt", "a+");
fwrite($exampleFile, "\nРезультат обрахунку h=$h and t=$t= $z");
fclose($exampleFile);



?>
