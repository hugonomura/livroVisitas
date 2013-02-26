<?php
  require_once('setup.php');
  $smarty = new Smarty_LivroVisitas;

  $smarty->assign('titulo', 'Cadastro');

  // definindo a class que esta active
  $smarty->assign('index', "");
  $smarty->assign('entrar', "");
  $smarty->assign('cadastro', "active");

  $smarty->display('cadastro.tpl');
?>
