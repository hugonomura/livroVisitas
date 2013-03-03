<?php
 require_once '../controllers/controller_usuario.php';
 require_once '../models/usuario.php';
 session_start();

  // recuperando os dados
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $site = $_POST["site"];
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  if($_POST["senha"] != $_POST["confirma_senha"]){
    echo "<b>Senha e confirma senha devem ser iguais!</b>";
    return;
  }

  if(usuarioExiste($login) == 1){
    echo "<b>Esse login já está sendo usado.</b>";
  }else{
    $u = new Usuario($login, $senha, $nome, $email, $site);
    $res = cadastrarUsuario($u);
    if($res == 1){
      echo "cadastrado";
      $_SESSION["usuario"] = true;
      $_SESSION["user_id"] = getIdUsuario($login);
    }else{
      echo "Erro ao cadastrar usuário";
    }
  }
?>
