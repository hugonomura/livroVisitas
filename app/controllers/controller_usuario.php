<?php
  $caminho = '/var/www/livroVisitas/app/';

  require_once $caminho . 'models/usuario.php';
  require_once $caminho . 'models/database.php';

  // Função que verifica se já existe um login no banco de dados
  function usuarioExiste($user){
    $db = new Database;
    $db->conectar();
    $db->selecionarDB();
    $db->set('sql', "SELECT login FROM Usuario WHERE login = '$user'");
    $result = $db->query();
    return mysql_num_rows($result);
  }

  // funcao que cadastra um usuario no BD
  function cadastrarUsuario($user){
    $db = new Database;
    $db->conectar();
    $db->selecionarDB();
    $nome = $user->get('nome');
    $email = $user->get('email');
    $website = $user->get('website');
    $login = $user->get('login');
    $senha = $user->get('senha');

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

  // funcao que recebe o login ou id do usuario e retorna os outros atributos
  function getUsuario($user){
    if(is_nan($user)){
      $db = new Database;
      $db->conectar();
      $db->selecionarDB();
      $db->set('sql', "SELECT * FROM Usuario WHERE login = '$user'");
      $result = $db->query();
    }else{
      $db = new Database;
      $db->conectar();
      $db->selecionarDB();
      $db->set('sql', "SELECT * FROM Usuario WHERE id = '$user'");
      $result = $db->query();
    }
    $u = mysql_fetch_assoc($result);
    $usuario = new Usuario($u["login"], $u["senha"], $u["nome"], $u["email"], $u["website"]);
    $usuario->set('id', $u["id"]);
    return $usuario;
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
