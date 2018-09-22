<?php

  require_once("criarconexaobd.php");
  /*Login dos alunos-->*/
  /* !!!!!!!!! NÃO TEMOS CERTEZA SE ESSES BGLHS ESTÃO FUNCIONANDO !!!!!!!*/
  /* Essa função aqui vai buscar o email do cara, se existir, e irá retorná-lo. */
  function verificaEmail(string $emaillegal){
    	$bd = criaconexaobd();
    	$sql = $bd -> prepare (
    	"select email from usuario
    	where email = :valemail");
    	$sql -> bindValue(':valemail', $emaillegal);
      $valor	= $sql -> execute();
    	return $valor;
    }
    /* Essa função aqui vai buscar a senha do cara, se existir, e irá retorná-la. */
    function verificaSenha(string $senhalegal){
      	$bd = criaconexaobd();
      	$sql = $bd -> prepare (
      	"select Senha from usuario
      	where senha = :valsenha");
      	$sql -> bindValue(':valsenha', $senhalegal);
        $valor	= $sql -> execute();
      	return $valor;
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
	if ($email == false)
	{
		$erro = "E-Mail não informado";
	}
		else if ($senha == false)
	{
		$erro = "Senha não informada";
	}

	else if ($email != verificaEmail($email)){
		$erro = "Nenhum usuário cadastrado com o email informado";
	}

	else if (password_verify($senha, $verificaSenha($senha) == false)
	{
		$erro = "Senha inválida";
	}
	// PENDENTE: Em caso de sucesso, redirecionar o usuário para a página de pedidos
	// PENDENTE: Em caso de erro, redirecionar usuário para a página de login para exibir as mensagens de erro
	if($erro != null){
		session_start();
		$_SESSION['erroLogin'] = $erro;
		header('Location: ../login-aluno.php');
	}
?>
