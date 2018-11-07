<?php
session_start();
require_once("../../Table/criarconexaobd.php");
  $Id = $_SESSION['idProfessorLogado'];
  function enviarClass($class, $id, $Larq, $tipo){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
      "INSERT INTO conteudos (classificacao, id_prof, arquivo, tipo)
      Values (:valclass, :valid , :valLarq, :valtipo);");
      $sql -> bindValue(':valclass', $class);
      $sql -> bindValue(':valid', $id);
      $sql -> bindValue(':valLarq', $Larq);
      $sql -> bindValue(':valtipo', $tipo);
      $sql -> execute();
  }

  $erro[] = null;
  $_request = array_map('trim', $_REQUEST);
  $_request = filter_var_array(
    $_request,
    [ 'classificação' => FILTER_DEFAULT, 'visibilidadePublicações' => FILTER_VALIDATE_INT ]
  );
  $classificação = $_request['classificação'];
  $tipo = $_request['visibilidadePublicações'];
  if ($classificação == false)
  {
    $erro = "Digite a classificação do conteúdo! (ex. 'Geometria Espacial')";
  }
  if($tipo == null){
    $erro = "Selecione a matéria.";
  }

  $arq = $_FILES['file'];


			$pasta = "carregamentos/$Id";

			mkdir("../../$pasta");


			$nomeOrig = $arq['name'];
			$nomeFinal = "$tipo - $nomeOrig";

			$caminhoCompleto = "$pasta/$nomeFinal";

			if($arq['error'] != UPLOAD_ERR_OK)

			{
					$erro = "Erro ao carregar arquivo";
			}
      else{
  	       enviarClass($classificação, $Id, $caminhoCompleto, $tipo);
  	        $_SESSION['erroCarregamento'] = $erro;
            header("location: ../../conteudo.php");
      }
			if (move_uploaded_file($arq['tmp_name'], "../../$caminhoCompleto") == false ){
				$erro = "Erro ao salvar arquivo no servidor";
			}



  /*$caminho = $location.$name;

  else {
    foreach ($erro as $key) {
      echo $key;
    }
  }*/

?>
