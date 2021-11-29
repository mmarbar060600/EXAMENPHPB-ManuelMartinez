<?php
$operador = $_POST["operador"];
$entrada=$_POST["entrada"];
    $e= $entrada["e1"];
    $e1= $entrada["e2"];
    $e2= $entrada["e3"];
    $e3= $entrada["e4"];
    $e4= $entrada["e5"];
function primeros($entrada)
{
    $resul=array_slice($entrada, 0, 3);
    print_r($resul);
}
function nuevo($entrada)
{
    array_push($entrada, "nueva", "entrada","array");
    print_r($entrada);
}
function ordena($entrada)
{
    asort($entrada);
    print_r($entrada);
}
function primer($entrada)
{
    array_unshift($entrada,"2","primeras");
    print_r($entrada);
}
switch ($operador) {
    case '1':
        primeros($entrada);
        break;
    
    case '2':
        nuevo($entrada);
        break;
    case '3':
        ordena($entrada);
        break;
    case '4';
        primer($entrada);
        break;
    default;
    echo "Opcion no valida";
    break;
        
}
?>