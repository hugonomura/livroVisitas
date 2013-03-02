<?php
 require_once '../controllers/controller_usuario.php';
 session_start();

  // recuperando os dados
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $site = $_POST["site"];
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  if(usuarioExiste($login) == 1){
    echo "<b>Esse login já está sendo usado.</b>";
  }else{
    $res = cadastrarUsuario($login, $senha, $nome, $email, $site);
    if($res == 1){
      echo "cadastrado";
      $_SESSION["usuario"] = true;
    }else{
      echo "Erro ao cadastrar usuário";
    }
  }

  // ir para login, avisando que o cadastro foi efetuado com sucesso, caso contrario volta pro form
//   header( 'Location: ../index.php') ;
?>
