<?php
  require_once '../models/usuario.php';
  require_once '../models/database.php';

  // funcao que verifica se um usuário existe ou não
  function usuarioExiste($user){
    $db = new Database;
    $db->conectar();
    $db->selecionarDB();
    $db->set('sql', "SELECT login FROM Usuario WHERE login = '$user'");
    $result = $db->query();
    return mysql_num_rows($result);
  }

  // funcao que cadastra um usuario no BD
  function cadastrarUsuario($login, $senha, $nome, $email, $website){
    $user = new Usuario($login, $senha, $nome, $email, $website);
    $db = new Database;
    $senha = sha1($senha);
    $db->conectar();
    $db->selecionarDB();
    $db->set('sql', "INSERT INTO `livroVisitas`.`Usuario`(`nome`, `email`, `website`, `login`, `senha`) VALUES(
              '$nome', '$email', '$website', '$login', '$senha')");
    $result = $db->query();
    return $result;
  }

  // funcao que recebe o login do usuario e retorna seu ID
  function getIdUsuario($user){
    $db = new Database;
    $db->conectar();
    $db->selecionarDB();
    $db->set('sql', "SELECT id FROM Usuario WHERE login = '$user'");
    $result = $db->query();
    return mysql_result($result, 0);
  }

  // funcao que recebe o login do usuario e retorna os outros atributos
  function getUsuario(){
    $db = new Database;
    $db->conectar();
    $db->selecionarDB();
    $db->set('sql', "SELECT * FROM Usuario WHERE login = '$user'");
    $result = $db->query();
    return mysql_result($result, 0);
  }

  // funcao que verifica se a senha do usuario esta correta
  function verificaSenha($user, $pwd){
    $db = new Database;
    $db->conectar();
    $db->selecionarDB();
    $db->set('sql', "SELECT senha FROM Usuario WHERE login = '$user'");
    $result = $db->query();
    if(mysql_result($result, 0) == sha1($pwd)){
      return true;
    }else{
      return false;
    }
  }
?>
