<?php
require_once('Veiculo.php');

class Carro extends Veiculo {
    private int $portas;
    public function __construct( string $marca, string $modelo, int $ano, int $portas  ){
        parent::__construct( $marca,$modelo,$ano);
        $this->setPortas($portas);
    }
    public function getPortas():float{
        return $this->portas;
    }
    public function setPortas(float $portas):void{
        if ($portas > 6 || $portas < 2) {
            echo "mentira";
        }else{
            $this->portas = $portas;
        }
    }
}





?>