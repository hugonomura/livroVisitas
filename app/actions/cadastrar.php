<?php
 // require_once('../setup.php');
 // $smarty = new Smarty_LivroVisitas;
 require_once '../controllers/controller_usuario.php';

session_start();

// dbg
ini_set('display_errors', 'On');
error_reporting(E_ALL);

  // recuperando os dados
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $site = $_POST["site"];
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  if(usuarioExiste($login) == 1){
    $_SESSION["mensagem"] = "Esse login já está sendo usado.";
    header("location:../cadastro.php");
  }else{
    $res = cadastrarUsuario($login, $senha, $nome, $email, $site);
    echo $res . "<br>";
    if($res == 1){
      // header("location:../login.php");
      $_SESSION["mensagem"] = "Usuario cadastrado com sucesso.";
      echo $_SESSION["mensagem"];
      header("location:../cadastro.php");
      // echo getIdUsuario($login);
    }else{
      echo "Erro ao cadastrar usuário";
    }
  }

  // ir para login, avisando que o cadastro foi efetuado com sucesso, caso contrario volta pro form
//   header( 'Location: ../index.php') ;
?>
