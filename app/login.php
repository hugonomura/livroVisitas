<?php
  require_once('setup.php');
  $smarty = new Smarty_LivroVisitas;
  $smarty->assign('titulo', 'Cadastro');
  session_start();

  // definindo a class que esta active
  $smarty->assign('index', "");
  $smarty->assign('entrar', "active");
  $smarty->assign('cadastro', "");

  $smarty->display('login.tpl');
?>
