<?php
require_once("../../Table/criarconexaobd.php");
function BuscaID($emaill){
  $bd = criaconexaobd();
  $sql = $bd -> prepare (
    "select id from usuario
    where email = :valemail");
    $sql -> bindValue(':valemail', $emaill);
    $sql -> execute();
    $resultado = $sql->fetch();
    return $resultado['id'];
}
function verificaid($var){
  $bd = criaconexaobd();
  $sql = $bd -> prepare (
    "select id from professor
    where id = :valid");
    $sql -> bindValue(':valid', $var);
    $sql -> execute();
    return $sql -> rowCount();
  }
function verificaEmail(string $emaillegal){
  $bd = criaconexaobd();
  $sql = $bd -> prepare (
    "select email from usuario
    where email = :valemail");
    $sql -> bindValue(':valemail', $emaillegal);
    $sql -> execute();
    return $sql -> rowCount();
  }
  function buscaSenha($emaillegal){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
      "select * from usuario
      where email = :valemail");
      $sql -> bindValue(':valemail', $emaillegal);
      $sql -> execute();
      $a = $sql->fetch();
      return $a['senha'];
    }
    $erro = null;
    $_request = array_map('trim', $_REQUEST);
    $_request = filter_var_array(
      $_request,
      [ 'email1' => FILTER_VALIDATE_EMAIL,
      'senha1' => FILTER_DEFAULT ]
    );
    $email = $_request['email1'];
    $senha = $_request['senha1'];

    if ($email == false)
    {
      $erro = "E-Mail não informado";
    }
    else if ($senha == false){
      $erro = "Senha não informada";

    }
    else if (verificaEmail($email)==0){
      $erro = "Email inexistente";
    }
    if (password_verify($senha, buscaSenha($email))==false)
    {
      $erro = "Senha inválida";
    }
    $id = BuscaID($email);
    if(verificaid($id)>0){
      $erro = "Você é um professor";
    }

    if($erro != null){
      //var_dump(buscaSenha($email);
      session_start();
      $_SESSION['erroLogin'] = $erro;
      header('Location: ../../login-aluno.php');
    }
    else {
      session_start();
		  $_SESSION['emailUsuarioLogado'] = $email;
      header('Location: ../../conteudo.php');
    }
    ?>
