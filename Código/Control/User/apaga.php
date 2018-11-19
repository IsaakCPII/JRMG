<?php
require_once("../../Table/criarconexaobd.php");
session_start();
$idp = $_SESSION['idProfessorLogado'];
$caminho = $_REQUEST["arq"];
function apagar($Prof, $arq){
  $bd = criaconexaobd();
  $sql = $bd -> prepare('delete arquivos from conteudo where id_prof = :valP and  arquivo = :valarq');
  $sql ->bindValue(':valP', $Prof);
  $sql  ->bindValue(':valarq',$arq);
  $sql -> execute();
}
apagar($idp, $caminho);
header("location: ../../conteudo.php");
?>
