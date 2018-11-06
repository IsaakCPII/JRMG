<?php
  require_once(__DIR__."/../../Table/criarconexaobd.php");
  //require_once('criaconexaobd.php');
  function Mostra($tipo){
    $bd =criaconexaobd();
    $sql = $bd -> prepare("select * from conteudos
                            where tipo = :valtipo");
                            $sql -> bindValue(':valtipo', $tipo);
                            $sql -> execute();
                            return $sql->FetchAll();
  }
?>
