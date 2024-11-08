<?php
require_once('class/Carro.php');
require_once('class/Moto.php');
require_once('class/Veiculo.php');

$carro = new Carro( 'Toyota','Corolla',2020,4 );
$carro -> acelerar(80);
$carro -> getPortas(4);
$carro -> frear(50);

$moto = new Moto( 'Yamaha','MT-07',2018);

$moto -> acelerar(30);
$moto -> frear(5);
$moto -> empinar();
?>