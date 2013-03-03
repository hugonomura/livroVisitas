<?php
  require_once('../controllers/controller_recado.php');
  require_once('../controllers/controller_usuario.php');
  require_once('../models/recado.php');
  require_once('../models/usuario.php');

  session_start();

  $recado = $_POST["novoRecado"];
  $user_id = $_SESSION["user_id"];

  $u = getusuario($user_id);
  $recado = new Recado($u, $recado);

  insereRecado($recado, $user_id);
  $nome = $u->get('nome');
  $mensagem = $recado->get('mensagem');
  echo "<header class=\"titulo\">$nome diz:</header><p><b>$mensagem</b></p><hr>";

?>