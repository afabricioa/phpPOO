<?php

class Pessoa{
  public $nome;
  public $idade;

  public function Falar(){
    echo $this->nome." Falou <br>";
  }
}

$fabricio = new Pessoa();

$fabricio->nome = "Antonio Fabricio";
$fabricio->idade = 25;
echo $fabricio->nome;
echo "<br>";
$fabricio->Falar();
var_dump($fabricio);
