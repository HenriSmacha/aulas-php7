<?php
class Register{

  private $name;
  private $lastName;
  private $nascimento;
  private $renda;
  private $email;
  private $sexo;
  private $cpf;
  private $rg;
  private $endereco;
  private $complemento;
  private $bairro;
  private $cep;
  private $cidade;
  private $estado;

  public function __construct(){}
  public function __destruct(){}

  public function __get($atv){return $this->$atv;}
  public function __set($atv,$val){$this->$atv=$val;}

  public function __toString(){
    return "Nome: ".$this->name."<br>Data de nascimento: $this->nascimento"."<br>E-mail: $this->email".
          "<br>Renda anual: $this->renda"."<br>CPF: $this->cpf"."<br>RG: $this->rg"."<br>Enderecço: $this->endereco"."<br>Complemento: $this->complemento".
          "<br>Bairro: $this->bairro"."<br>Cidade: $this->cidade"."<br>Estado: $this->estado"."<br>CEP: $this->cep";
  }
}//fecha classe
