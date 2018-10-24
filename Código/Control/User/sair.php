<?php
  session_start();
  $_SESSION['emailUsuarioLogado'] = false;
  $_SESSION['verificador'] = false;
  $_SESSION['idProfessorLogado']= false;
  header('Location:../../selec-login.php');
?>
