<?php

class Recado {

  private $id, $usuario, $mensagem, $publicado;

  function __construct($usuario, $mensagem) {
    $this->usuario = $usuario;
    $this->mensagem = $mensagem;
  }

  public function set($prop, $value) {
    $this->$prop = $value;
  }

  // getter global
  public function get($prop) {
    return $this->$prop;
  }

}

?>
