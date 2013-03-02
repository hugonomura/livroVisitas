<?php

  $caminho = '/var/www/livroVisitas/app/';
  require_once $caminho . 'controllers/controller_usuario.php';
  require_once('setup.php');
  $smarty = new Smarty_LivroVisitas;
  $smarty->assign('titulo', 'Perfil');
  session_start();

  $user_id = $_SESSION["user_id"];
  $usuario = getUsuario($user_id);

  // definindo a class que esta active
  $smarty->assign('index', "");
  $smarty->assign('entrar', "");
  $smarty->assign('cadastro', "");
  $smarty->assign('perfil', "active");

  $smarty->assign('user', $usuario);
  $smarty->display('perfil.tpl');
?>
