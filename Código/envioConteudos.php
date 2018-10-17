<?php
	session_start();
	$erro=null;
	if(!empty($_SESSION['erro'])){
		$erro = $_SESSION['erro'];
	}
	$emailP = $_SESSION['emailProfessorLogado'];
	if(empty($_SESSION['emailUsuarioLogado'] == false)) {
		header('Location: conteudo.php' );
  }
 	if(empty($_SESSION['emailProfessorLogado'] == false)) {

?>
<!DOCTYPE HTML>
<style media="screen">
  body, html {
    height: 100%;
  }

  body {
    height: 100%;
    background: #3846DC;
    background: -webkit-linear-gradient(#3846DC, #00EAAC);
    background: -o-linear-gradient(#3846DC, #00EAAC);
    background: -moz-linear-gradient(#3846DC, #00EAAC);
    background: linear-gradient(#3846DC, #00EAAC);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	background-attachment: fixed;

  }
  .formulariozim{
    position: absolute;
    background-color: white;
    border-radius: 10px;
    font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
    text-align: center;
    font-size:20px;
    width: 32%;
    height: 32%;
    top: 50%;
    right: 34%;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
  .div_sup{
    margin-left: auto;
    margin-right: auto;
  }
  .imgm{
    height: 50%;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
</style>

<html lang="pt-br">
    <head>
      <title>Envio de Conteúdos</title>
    <head>
    <body>
      <div class="div_sup" style="transform: translateY(0px); opacity: 1;">
        <img class="imgm"  src="b.png"/>
      </div>
      <div class="formulariozim"> <br>

        <form enctype="multipart/form-data" action="Control/User/armazenaConteudos.php"  method="post">
          <label><b>Envio de Novos arquivos</b></label><br><br>
          <label>classificação: </label><input type="text"  name="classificação" required  placeholder="Digite a classificação do conteúdo."><br>
          <input type="file"  required  name="file" placeholder="Selecione o arquivo"><br><br>
          <input type="submit" value="Enviar"><br>
        </form>
      </div>
    </body>
</html>
<?php
  }
?>
