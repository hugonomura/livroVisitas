<?php

class Usuario {

  private $id, $login, $senha, $nome, $email, $website, $admin;

  function __construct($login, $senha, $nome, $email, $website, $admin=false) {
    $this->login = strtolower($login);
    $this->senha = sha1($senha);
    $this->nome = $nome;
    $this->email = $email;
    $this->website = $website;
    $this->admin = $admin;
  }

  // setter global
  public function set($prop, $value) {
    $this->$prop = $value;
  }

  // getter global
  public function get($prop) {
    return $this->$prop;
  }

}

?>
