<?php

class Recado {

  private $usuario, $mensagem;

  function __construct($usuario, $mensagem) {
    $this->usuario = $usuario;
    $this->mensagem = $mensagem;
  }

  public function getUsuario() {
    return $this->usuario;
  }

  public function setUsuario($usuario) {
    $this->usuario = $usuario;
  }

  public function getMensagem() {
    return $this->mensagem;
  }

  public function setMensagem($mensagem) {
    $this->mensagem = $mensagem;
  }

}

?>