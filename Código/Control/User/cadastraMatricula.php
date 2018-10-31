<?php
  require_once("../../Table/criarconexaobd.php");


  function verifica($mat){
    $bd= criaconexaobd();

    $sql = $bd -> prepare(
      "select matricula from matricula where matricula = :mat");
      $sql -> bindValue(':mat', $mat);
      $sql->execute();
      return $sql -> rowCount();
  }
  function inserematricula($mat){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
      "INSERT INTO matricula (nome, matricula)
    	Values (:valnome, :valmatricula);");
      $sql -> bindValue(':valnome', $mat['nome']);
      $sql -> bindValue(':valmatricula', $mat['matricula']);
      $sql -> execute();
    }


        $erro = null;
        $_request = array_map('trim', $_REQUEST);
        $_request = filter_var_array(
          $_request,
          [ 'matricula' => FILTER_DEFAULT,
          'nome' => FILTER_DEFAULT ]
        );
        $nome = $_request['nome'];
        $matricula = $_request['matricula'];
        if ($nome == false)
        {
          $erro = "Nome não informado";
        }
        else if ($matricula == false)
        {
          $erro = "Matrícula não informada";
        }
        if(verifica($matricula) > 0)
        {
          $erro = "matricula já existe";
          header('Location: ../../paginaAdministrador.php');
        }

        if($erro != null){
          session_start();
          $_SESSION['erro'] = $erro;
          header('Location: ../../paginaAdministrador.php');
        }
        else {
          inserematricula($_request);
        }




?>
