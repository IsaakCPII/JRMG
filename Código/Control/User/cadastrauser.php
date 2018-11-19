<?php
    $erros = [];
    $request = array_map('trim', $_REQUEST);

    $request = filter_var_array(
    $request,
    [
    'nome' => FILTER_DEFAULT,
    'email' => FILTER_VALIDATE_EMAIL,
    'senha' => FILTER_DEFAULT,
    'matricula'=>FILTER_DEFAULT,
  ]
          );

    $nome = $request ['nome'];
    if ($nome == false) {
        $erros[] = "O nome informado não é valido";// code...
    }
    elseif (strlen ($nome) < 3 || strlen($nome) > 35) {
      $erros [] =  "A quantidade de caracteres do nome deve estar entre 3 e 35";
      // code...
    }

    $senha = $request['senha'];
    if ($senha == false) {
      $erros[] = "A senha está inválida";

    }

    elseif (strlen($senha) < 6 || strlen($senha) > 12 ) {
      	$erros[] = "A quantidade de caracteres da senha deve estar entre 6 e 12";
    }

    $matricula = $request['matricula'];
    if (empty($matricula)==false){
      if(verificador($matricula)==0){
        $erros[]="Esta Matrícula não existe.";
      }
      if(verifica_a_dor($matricula)==0){
        $erros[]="Usuário já cadastrado com essa matrícula.";
      }
    }
    if(buscausuario($request['email'])>0){
        $erros[] = "Email já existe" ;
    }

    if($erros != null){
      session_start();
      $_SESSION['erroLogin'] = $erros;
      header('Location: ../../cadastro.php');
    }
    else {
      insereuser($request);
      header('Location: ../../selec-login.php');
    }
 ?>
