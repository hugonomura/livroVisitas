<?php
  $caminho = '/var/www/livroVisitas/app/';
  require_once $caminho . 'controllers/controller_usuario.php';
  require_once $caminho . 'models/usuario.php';
  require_once('setup.php');
  $smarty = new Smarty_LivroVisitas;
  $smarty->assign('titulo', 'Perfil');
  session_start();

  // definindo a class que esta active
  $smarty->assign('index', "");
  $smarty->assign('entrar', "");
  $smarty->assign('cadastro', "");
  $smarty->assign('perfil', "active");

  if($_GET["u_id"]){
    $user_id = $_GET["u_id"];
  }else{
    $user_id = $_SESSION["user_id"];
  }
  $usuario = getUsuario($user_id);
  $smarty->assignByRef('user',$usuario);
  $smarty->display('perfil.tpl');
?>
