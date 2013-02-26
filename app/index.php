<?php

  require_once('setup.php');
  $smarty = new Smarty_LivroVisitas;
  $smarty->assign('name', 'Thomas');

  $smarty->assign('titulo', 'Home');

  // definindo a class que esta active
  $smarty->assign('index', "active");
  $smarty->assign('entrar', "");
  $smarty->assign('cadastro', "");

  $smarty->display('index.tpl');
?>
