<?php

class Usuario {

  private $login, $senha, $nome, $email, $website;

  function __construct($login, $senha, $nome, $email, $website) {
    $this->login = $login;
    $this->senha = $senha;
    $this->nome = $nome;
    $this->email = $email;
    $this->website = $website;
  }

  public function getLogin() {
    return $this->login;
  }

  public function setLogin($login) {
    $this->login = $login;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getWebsite() {
    return $this->website;
  }

  public function setWebsite($website) {
    $this->website = $website;
  }

}

?>