<?php

  require_once('setup.php');
  $smarty = new Smarty_LivroVisitas;

  $smarty->assign('titulo', 'Home');
  session_start();

  // definindo a class que esta active
  $smarty->assign('index', "active");
  $smarty->assign('entrar', "");
  $smarty->assign('cadastro', "");

  $_SESSION["mensagem"] = "";

  $smarty->display('index.tpl');
?>
