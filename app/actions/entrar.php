<?php
  require_once '../controllers/controller_usuario.php';

  session_start();

  // recuperando os dados
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  if(usuarioExiste($login) == 0 || verificaSenha($login, $senha) == false){
    echo "<b>Usuário ou senha errados.</b>";
  }else{
    echo "logado";
    $_SESSION["user_id"] = getIdUsuario($login);
    $_SESSION["usuario"] = true;
  }
?>
