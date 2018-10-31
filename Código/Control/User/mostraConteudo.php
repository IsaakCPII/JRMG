<?php
  require_once("../../Table/criarconexaobd.php");

  function Mostra($tipo){
    criaconexaobd();
    $sql = $bd -> prepare("select * from conteudos
                            where tipo = :valtipo");
                            $sql -> bindValue(':valtipo', $tipo);
                            $sql -> execute();
                            return $sql->FetchAll();
  }
?>
