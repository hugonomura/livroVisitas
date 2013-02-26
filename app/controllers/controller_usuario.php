<?php
  require_once '../models/usuario.php';
  require_once '../models/database.php';

  function usuarioExiste($user){
    $db = new Database;
    $db->conectar();
    $db->selecionarDB();
    $db->set('sql', "SELECT login FROM Usuario WHERE login = '$user';");
    $result = $db->query();
    return mysql_num_rows($result);
  }

  function cadastrarUsuario($login, $senha, $nome, $email, $website){
    $user = new Usuario($login, $senha, $nome, $email, $website);
    $db = new Database;
    $db->conectar();
    $db->selecionarDB();
    $db->set('sql', "INSERT INTO `livroVisitas`.`Usuario`(`nome`, `email`, `website`, `login`, `senha`) VALUES(
              '$nome', '$email', '$website', '$login', '$senha');");
    $result = $db->query();
    return $result;
  }
?>