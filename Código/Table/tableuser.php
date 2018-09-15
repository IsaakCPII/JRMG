<?php
  require_once("criarconexaobd.php");

  function insereuser($dadosuser){
  $bd = criaconexaobd();
  $sql = $bd -> prepare(
    "INSERT INTO usuario (nome, senha, email )
  	Values (:valnome, :valsenha, :valemail);");

      $senha = $dadosuser['senha'];
      $hash = password_hash($senha, PASSWORD_DEFAULT);

    	$sql -> bindValue(':valnome', $dadosuser['nome']);
      $sql -> bindValue(':valsenha', $hash);
      $sql -> bindValue(':valemail', $dadosuser['email']);
      $sql -> execute();
  }

  function buscausuario(string $emailigual)
  {
  	$bd = criaconexaobd();
  	$sql = $bd -> prepare (
  	"select email from usuario
  	where email = :valemail
  	"
  	);

    $sql -> bindValue(':valemail', $emailigual);
    $sql -> execute();
    return $sql -> rowCount();
  }
?>
