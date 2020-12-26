<?php
$nilai = 10;
for ($a=1; $a <$nilai ; $a++) { 
for ($b=1; $b <=$a ; $b++) { 
	echo "&nbsp";
}
for ($c=$nilai; $c >=$a ; $c-=1) { 
	echo "*";
}
echo "<br>";
}
?>