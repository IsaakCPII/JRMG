<?php
  require_once("../../Table/criarconexaobd.php");



  function inserematricula($mat){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
      "INSERT INTO professor (matricula, nome)
    	Values (:valmatricula, :valnome);");
      $sql -> bindValue(':valmatricula', $mat['matricula']);
      $sql -> bindValue(':valnome', $mat['nome']);
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

        if($erro != null){
          header('Location: ../../paginaAdministrador.php');
        }
        else {
          inserematricula($_request);


        }




?>
