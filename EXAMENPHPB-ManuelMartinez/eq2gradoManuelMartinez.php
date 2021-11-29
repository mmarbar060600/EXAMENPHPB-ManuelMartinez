<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$poten = pow($b, 2);
$multi1 = 4 * $a;
$multi2 = $multi1 * $c;
$rai = $poten - $multi2;
$raiz = sqrt($rai);
$a2= $a * 2;
$suma= -$b + $raiz;
$resta= -$b - $raiz;
$ope1= $suma / $a2;
$ope2 = $resta / $a2;
print "Resultado de la ecuacion positiva: " . $ope1;
echo "<br>";
print "Resultado de la ecuacion negativa: ". $ope2;
echo "<br>";
echo "Manuel Martínez 2ºASIR";
?>