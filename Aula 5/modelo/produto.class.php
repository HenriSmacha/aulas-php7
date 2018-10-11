<?php
class Produto{

  private $nome;
  private $valorCusto;
  private $quantidade;

  public function getNome():string{
    return $this->nome;
  }
  public function setNome(string $nome):void{
    $this->nome = $nome;
  }
  public function getValorCusto():float{
    return $this->valorCusto;
  }
  public function setValorCusto(float $valorCusto):void{
    $this->valorCusto = $valorCusto;
  }
  public function getQuantidade():int{
    return $this->quantidade;
  }
  public function setQuantidade($quantidade):void{
    $this->quantidade = $quantidade;
  }

  public function calcularEstoque():float{
    return $this->quantidade*$this->valorCusto;
  }
}//fecha classe
