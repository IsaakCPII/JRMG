<?php
  require_once("../../Table/criarconexaobd.php");
  function destroi($del){
    $bd =criaconexaobd();
    $sql = $bd -> prepare("delete from Matricula
                            where matricula = :valtipo");
                            $sql -> bindValue(':valtipo', $del);
                            $sql -> execute();
  }
  function buscaMat($mat){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
      "select matricula from matricula
      where matricula = :valm");
      $sql -> bindValue(':valm', $mat);
      $sql -> execute();
      return $sql->rowCount();
    }
  $erro = null;
  $request = array_map('trim', $_REQUEST);
  $request = filter_var_array(
                 $request,
                 [ 'mat' => FILTER_DEFAULT]
             );
  $mat = $request['mat'];
  if ($mat == false)
  {
    $erro = "Matricula não informada";
  }
  if(buscaMat($mat)==0){
    $erro = "Essa matricula não existe";
    }

  if($erro != null){
    session_start();
    $_SESSION['erroLogin'] = $erro;
    header('Location: ../../paginaAdministrador.php');
  }
  else {
    destroi($mat);
    header('Location: ../../paginaAdministrador.php');
  }
?>
