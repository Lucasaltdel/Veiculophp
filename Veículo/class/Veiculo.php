<?php
class Veiculo{
    private string $marca;
    private string $modelo;
    private int $ano;
    private float $velocidadeatual=0;


    public function __construct($marca,$modelo,$ano){
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
    }
    public function getMarca():string{
        return $this->marca;
    }
    public function setMarca(string $marca): void{
        if($marca != ""){
            $this->marca = $marca;
        } else{
            $this->marca = "Marca Não indentificada";
        }
    }
    public function getModelo():string {
        return $this->modelo;
    }
    public function setModelo(string $modelo): void{
        if($modelo != ""){
            $this->modelo = $modelo;
        } else{
            $this->modelo = "Modelo Não indentificado";
        }
    }
    public function getAno():int {
        return $this->ano;
    }
    public function setAno(int $ano):void {
        if ($ano < 1886){
            $this->ano = "ano invalido os veiculos foram inventados em 1886";
        } else {
            $this-> ano = $ano;
        }
    }
    public function getVelocidade():float {
        return $this->velocidadeatual;
    }
    public function setVelocidade(float $velocidade): void {
        if ($velocidade > 0 || $velocidade < 0) {
            $this->velocidadeatual = $velocidade;
        }
    }

   
    public function acelerar(float $quantidade): void{
        if($quantidade >= 0){
            $this->velocidadeatual = $this->velocidadeatual + $quantidade;
            echo "Velocidade do Veiculo {$this->getMarca()} {$this->getModelo()}: {$this->getVelocidade()}Km/h </br>";
        } else {
            echo "Velocidade do Veiculo {$this->getMarca()} {$this->getModelo()}: {$this->getVelocidade()}Km/h Não foi capaz de acelerar</br>";
        }
    }


    public function frear(float $quantidade): void{
        if($quantidade >= 0 && ($this->velocidadeatual - $quantidade) >= 0){
            $this->velocidadeatual = $this->velocidadeatual - $quantidade;
            echo "Velocidade do Veiculo {$this->getMarca()} {$this->getModelo()}: {$this->getVelocidade()}Km/h após Frear</br>";
        } else {
            $this->velocidadeatual = 0;
            echo "Velocidade do Veiculo {$this->getMarca()} {$this->getModelo()}: {$this->getVelocidade()}Km/h O Carro parou</br>";
        }
    }

    
}
?>


