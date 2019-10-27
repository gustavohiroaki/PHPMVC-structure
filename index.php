<?php
include 'app/core/Core.php';

$core = new Core;
$core->run();

echo "Controller: ".$core->getController();
echo "<br>";
echo "Método: ".$core->getMetodo();
echo "<br>";
$parametros = $core->getParametros();
$num = 1;
foreach($parametros as $param){

    echo "Parâmetro ".($num).": ". $param;
    echo "<br>";
    $num++;
}