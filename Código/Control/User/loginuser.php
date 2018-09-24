<?php
  require_once("../../Table/criarconexaobd.php");
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
		else if ($senha == false)
	{
		$erro = "Senha não informada";
	}

	else if (verificaEmail($email) == true){
		$erro = "Nenhum usuário cadastrado com o email informado";
	}



	else if (password_verify($senha, verificaSenha($senha) == false))
	{
		$erro = "Senha inválida";
	}
	// PENDENTE: Em caso de sucesso, redirecionar o usuário para a página de pedidos
	// PENDENTE: Em caso de erro, redirecionar usuário para a página de login para exibir as mensagens de erro
	if($erro != null){

		header('Location: ../../cadastro.php');
	}

  else {
    header('Location: ../../conteudo.php');
  }

?>
