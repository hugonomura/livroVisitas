<?php

class Usuario {

  private $id, $login, $senha, $nome, $email, $website, $admin;

  function __construct($login, $senha, $nome, $email, $website, $admin) {
    $this->login = $login;
    $this->senha = sha1($senha);
    $this->nome = $nome;
    $this->email = $email;
    $this->website = $website;
    $this->admin = $admin;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
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
    $this->senha = sha1($senha);
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

  public function getAdmin() {
    return $this->admin;
  }

  public function setAdmin($admin) {
    $this->admin = $admin;
  }
  
}

?>
