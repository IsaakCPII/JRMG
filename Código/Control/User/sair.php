<?php
  session_start();
  $_SESSION['emailUsuarioLogado'] = "";
  header('Location:../../selec-login.php');
?>
