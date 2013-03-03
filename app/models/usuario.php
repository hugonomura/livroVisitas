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
    if($prop == "login"){
      $this->$prop = strtolower($value);
    }
    $this->$prop = $value;
  }

  // getter global
  public function get($prop) {
    return $this->$prop;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setSenha($senha) {
    $this->senha = sha1($senha);
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function setWebsite($website) {
    $this->website = $website;
  }

  public function setAdmin($admin) {
    $this->admin = $admin;
  }

}

?>
