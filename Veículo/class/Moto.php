<?php
require_once('Veiculo.php');
class Moto extends Veiculo {
    public function __construct( string $marca,string $modelo, int $ano  ){
        parent::__construct( $marca,$modelo,$ano);
}
public function empinar():void{
if ($this->getVelocidade() >=20) {
    echo "a moto está bem empinada";
}
}
}
?>