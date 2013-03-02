<?php

// dbg
ini_set('display_errors', 'On');
error_reporting(E_ALL);

  require_once('controllers/controller_recado.php');
  require_once('setup.php');
  $smarty = new Smarty_LivroVisitas;

  $smarty->assign('titulo', 'Home');
  session_start();

  // definindo a class que esta active
  $smarty->assign('index', "active");
  $smarty->assign('entrar', "");
  $smarty->assign('cadastro', "");

  $retorno = recuperarRecados();
  $smarty->assign('recados', $retorno);

  $smarty->display('index.tpl');
?>
