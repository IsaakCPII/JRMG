<?php
  session_start();
  $_SESSION['emailUsuarioLogado'] = false;
  $_SESSION['verificador'] = false;
  $_SESSION['idProfessorLogado']= false;
  $_SESSION['adm']= false;
  header('Location:../../selec-login.php');
?>
