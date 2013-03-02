<?php
  require_once('setup.php');
  $smarty = new Smarty_LivroVisitas;
  $smarty->assign('titulo', 'Entrar');
  session_start();

  // definindo a class que esta active
  $smarty->assign('index', "");
  $smarty->assign('entrar', "active");
  $smarty->assign('cadastro', "");
  $smarty->assign('perfil', "");

  $smarty->display('login.tpl');
?>
