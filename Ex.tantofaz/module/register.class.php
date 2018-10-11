<?php
class Register{

  private $name;
  private $lastName;
  private $email;
  private $rua;
  private $logradouro
  private $cidade;
  private $estado;
  private $pais;
  private $bairro;
  private $cep;

  public function __construct(){}
  public function __destruct(){}

  public function __get($atv){return $this->$atv;}
  public function __set($atv,$val){$this->$atv=$val;}

  public function __toString(){
    return "Nome: ".$this->name." ".$this->lastName.
                  "<br>E-mail: $this->email";
  }
}//fecha classe
