<?php
$quini = $_POST["numero"];
    for ($contador=1; $contador <= $quini ; $contador++) {
        echo "<br>";
        print "Quiniela:". $contador;
        echo "<br>";
    for ($i=1; $i <= 15 ; $i++) {
    $x=rand(1,3);
    echo "<br>";
    if ($x >= 3) {
        $x="x";
    }
    else {
        $x=rand(1,2);
    }
    print "Resultado del partido ".$i.": ".$x;
}
}
?>