<?php
interface AutoMotor {
    public function ligar();
    public function acelerar();
    public function freiar();
    public function desligar();
}

class Moto implements AutoMotor {
 
    private $motorLigado = false;
    private $velocidade = 0;

    public function ligar() { $this->motorLigado = true; }
    public function desligar() { $this->motorLigado = false; }
    public function acelerar() { $this->velocidade++; }
    public function freiar() { $this->velocidade--; }
}

$moto = new Moto();
$moto->ligar();
?>