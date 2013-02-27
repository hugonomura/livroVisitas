<?php
  session_start();
  $_SESSION["usuario"] = false;
  header('Location: ../index.php');
?>
