<?php

class Veiculo {
  public $modelo;
  public $cor;
  public $ano;

  public function Andar(){
    echo "Andou <br>";
  }

  public function Parar(){
    echo "Parou <br>";
  }
}

class Carro extends Veiculo{
  public function ligarLimpador(){
    echo "Limpando em 321<br>";
  }
}

class Moto extends Veiculo{
  public function darGrau(){
    echo "Dando grau em 321<br>";
  }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Preto";
$carro->ano = "2017";
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);
echo "<br>";

$moto = new Moto();
$moto->modelo = "Biz";
$moto->cor = "Azul";
$moto->ano = "2019";
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);
