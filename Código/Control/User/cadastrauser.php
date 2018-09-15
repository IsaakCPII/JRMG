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
      // code...
    }

    elseif (strlen($senha) < 6 || strlen($senha) > 12 ) {
      	$erros[] = "A quantidade de caracteres da senha deve estar entre 6 e 12";
      // code...
    }

    if(buscausuario($request['email'])>0){
        $erros[] = "Email já existe" ;
    }

    if (empty($erros) == true) {
  	insereuser($request);
    }


 ?>

 <?php foreach($erros as $msg) { ?>
 			<li><?= $msg ?></li>
 		<?php } ?>
