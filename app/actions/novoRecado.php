<?php
  require_once('../controllers/controller_recado.php');

  session_start();

  $recado = $_POST["novoRecado"];
  $user_id = $_SESSION["user_id"];

  insereRecado($recado, $user_id);

  echo "<header class=\"titulo\">$user_id diz:</header><p><b>$recado</b></p><hr>";

?>