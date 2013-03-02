<?php

class Recado {

  private $id, $usuario, $mensagem, $publicado;

  function __construct($usuario, $mensagem, $publicado) {
    $this->usuario = $usuario;
    $this->mensagem = $mensagem;
    $this->publicado = $publicado;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
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

  public function getPublicado() {
    return $this->publicado;
  }

  public function setPublicado($publicado) {
    $this->publicado = $publicado;
  }

}

?>
