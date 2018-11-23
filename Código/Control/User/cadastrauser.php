<?php
    require_once("../../Table/tableuser.php");
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
      // code...
      $erros [] =  "OS caracteres devem estar entre 3 e 35";
    }

    $senha = $request['senha'];
    if ($senha == false) {
      $erros[] = "A senha está inválida";

    }

    elseif (strlen($senha) < 6 || strlen($senha) > 12 ) {
      	$erros[] = "OS caracteres da senha devem estar entre 6 e 12";
    }

    $matricula = $request['matricula'];
    if (empty($matricula)==false){
      if(verificador($matricula)==0){
        $erros[]="Matrícula inexistente.";
      }
      if(verifica_a_dor($matricula)>0){
        $erros[]="Matrícula já cadastrada.";
      }
    }
    if(buscausuario($request['email'])>0){
        $erros[] = "Email existente." ;
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
