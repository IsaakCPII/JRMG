<?php
    require_once("../../Table/criarconexaobd.php");
    function verificaEmail(string $emaillegal){
      $bd = criaconexaobd();
      $sql = $bd -> prepare (
        "select email from usuario
        where email = :valemail");
        $sql -> bindValue(':valemail', $emaillegal);
        $sql -> execute();
        return $sql -> rowCount();
      }

      function verificamatricula(string $matriculalegal){
        $bd = criaconexaobd();
        $sql = $bd -> prepare (
          "select matricula from professor
          where matricula = :valmatricula");
          $sql -> bindValue(':valmatricula', $matriculalegal);
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
	                 'senha' => FILTER_DEFAULT ]
	           );
	$email = $request['email'];
	$senha = $request['senha'];
  $matricula = $request['matricula'];
	if ($email == false)
	{
		$erro = "E-Mail não informado";
	}
		else if ($senha == false)
	{
		$erro = "Senha não informada";
	}
  
	// PENDENTE: Concluir a validação
	else if (verificaEmail($email)==0){
		$erro = "Nenhum usuário cadastrado com o email informado";
	}

	else if (password_verify($senha, buscasenha($email))==false)
	{
		$erro = "Senha inválida";
	}
	// PENDENTE: Em caso de sucesso, redirecionar o usuário para a página de pedidos
	// PENDENTE: Em caso de erro, redirecionar usuário para a página de login para exibir as mensagens de erro
  if (verificamatricula($matricula)==0){
    $erro = "Nenhum usuário cadastrado com o email informado";
  }

  if($erro != null){
		session_start();
		$_SESSION['erroLogin'] = $erro;
		header('Location: ../login-professor.php');
	}
  else {
    session_start();
    $_SESSION['emailUsuarioLogado'] = $email;
    header('Location: ../../conteudo.php');
  }
?>
