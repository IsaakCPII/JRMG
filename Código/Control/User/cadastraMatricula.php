<?php
  require_once("../../Table/criarconexaobd.php");
  function buscaMat($mat){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
      "select matricula from matricula
      where matricula = :valm");
      $sql -> bindValue(':valm', $mat);
      $sql -> execute();
      return $sql->rowCount();
    }
  function inserematricula($class){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
      "INSERT INTO matricula (matricula)
      Values (:valMat);");
      $sql -> bindValue(':valMat', $class);
      $sql -> execute();
    }
        $erro = null;
        $_request = array_map('trim', $_REQUEST);
        $_request = filter_var_array(
          $_request,
          [ 'matricula' => FILTER_DEFAULT]
        );
        $matricula = $_request['matricula'];
        if ($matricula == false)
        {
          $erro = "Matrícula não informada";
        }
        if(buscaMat($matricula)!=0){
          $erro = "Matricula já cadastrada";
        }
        if($erro != null){
          session_start();
          $_SESSION['erroLogin'] = $erro;
          header('Location: ../../paginaAdministrador.php');
        }
        else {
          inserematricula($matricula);
          header("location: ../../paginaAdministrador.php");
        }




?>
