<?php
  session_start();
  $_SESSION["usuario"] = false;
  $_SESSION["user_id"] = false;
  header('Location: ../index.php');
?>
