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
  function verificaEmail(string $emaillegal){
    $bd = criaconexaobd();
    $sql = $bd -> prepare (
      "select email from usuario
      where email = :valemail");
      $sql -> bindValue(':valemail', $emaillegal);
      $sql -> execute();
      return $sql -> rowCount();
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
    function buscaSenha(string $emaillegal){
      $bd = criaconexaobd();
      $sql = $bd -> prepare (
        "select Senha from usuario
         where email = :valemail");
        $sql -> bindValue(':valemail', $emaillegal);
        $valor	= $sql -> execute();
        $resultado = $sql->fetch();
        return $resultado['Senha'];
    }
  $erro = null;
	$request = array_map('trim', $_REQUEST);
	$request = filter_var_array(
	               $request,
	               [ 'email' => FILTER_VALIDATE_EMAIL,
	                 'senha' => FILTER_DEFAULT,
                   'matricula'=>FILTER_DEFAULT]
	           );
	$email = $request['email'];
	$senha = $request['senha'];
	if ($email == false)
	{
		$erro = "E-Mail não informado";
	}
		else if ($senha == false)
	{
		$erro = "Senha não informada";
	}
	else if (verificaEmail($email)==0){
		$erro = "Nenhum usuário cadastrado com o email informado";
	}
	else if (password_verify($senha, buscasenha($email))==false)
	{
		$erro = "Senha inválida";
	}
  else
  {
    $id = BuscaID($email);
    if (verificaid($id)==0){
      $erro = "Você não é um professor";
    }
  }

  if($erro != null){
		session_start();
		$_SESSION['erroLogin'] = $erro;
		header('Location: ../../login-professor.php');
	}
  else {
    session_start();
    $_SESSION['idProfessorLogado'] = $id;
    $_SESSION['emailUsuarioLogado'] = $email;
    $_SESSION['verificador'] = "1";
    header('Location: ../../conteudo.php');
  }
?>
