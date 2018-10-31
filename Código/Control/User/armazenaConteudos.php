<?php
session_start();
if(!empty($_SESSION['idProfessorLogado'])){
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

  $foi=null;
  $erro[] = null;
  $location = 'C:/Users/labcaxias/Documents/Turma 303/xampp/htdocs/Código/upload/';
  if (isset($_FILES['file'])) {
      $name = $_FILES['file']['name'];
      $tmp_name = $_FILES['file']['tmp_name'];

      $error = $_FILES['file']['error'];
      if ($error !== UPLOAD_ERR_OK) {
          $erro = 'Erro ao fazer o upload: ' . $error ;
      }
      elseif (move_uploaded_file($tmp_name, $location . $name)) {
          $foi = 'Uploaded';
      }
    }
    else {
    $erro =  'Selecione um arquivo para fazer upload';
    }

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

  $caminho = $location.$name;
  if(!empty($erro)){
    enviarClass($classificação, $Id, $caminho, $tipo);
    header('location: ../../envioConteudos.php');
  }
  else {
    foreach ($erro as $key) {
      echo $key;
    }
  }
}
else{
  $_SESSION['erro'] = "Você não é um professor";
  header('location: conteudo.php');
}
?>
