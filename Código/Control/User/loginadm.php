<?php
require_once("../../Table/criarconexaobd.php");
function BuscaUsu($usua){
  $bd = criaconexaobd();
  $sql = $bd -> prepare (
    "select id from adm
    where usuario = :valusu");
    $sql -> bindValue(':valusu', $usua);
    $sql -> execute();
    $resultado = $sql->fetch();
    return $resultado['id'];
}
function verificaUsu($usulegal){
  $bd = criaconexaobd();
  $sql = $bd -> prepare (
    "select usuario from adm
    where usuario = :valusu");
    $sql -> bindValue(':valusu', $usulegal);
    $sql -> execute();
    return $sql -> rowCount();
  }
  function buscaSenha($usulegal){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
      "select * from adm
      where usuario = :valusu");
      $sql -> bindValue(':valusu', $usulegal);
      $sql -> execute();
      $a = $sql->fetch();
      return $a['senha'];
    }
    $erro = null;
    $_request = array_map('trim', $_REQUEST);
    $_request = filter_var_array(
      $_request,
      [ 'usuario' => FILTER_DEFAULT,
      'senha' => FILTER_DEFAULT ]
    );
    $usu = $_request['usuario'];
    $senha = $_request['senha'];

    if ($usu == false)
    {
      $erro = "E-Mail não informado";
    }
    else if ($senha == false){
      $erro = "Senha não informada";

    }
    else if (verificaUsu($usu)==0){
      $erro = "Usuario inexistente";
    }
    if ($senha != buscaSenha($usu))
    {
      $erro = "Senha inválida";
    }
    $id = BuscaUsu($usu);
    if(verificaUsu($id)>0){
      $erro = "Você é um adm";
    }

    if($erro != null){
      session_start();
      $_SESSION['erroLogin'] = $erro;
      header('Location: ../../login-adm.php');
    }
    else {
      session_start();
		  $_SESSION['emailUsuarioLogado'] = $usu;
      $_SESSION['adm'] = 1;
      $_SESSION['verificador'] = 1;
      header('Location: ../../conteudo.php');
    }
    ?>
