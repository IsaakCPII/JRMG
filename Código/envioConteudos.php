<?php
	session_start();
	$erro=null;
	if(!empty($_SESSION['erro'])){
		$erro = $_SESSION['erro'];
	}
	if($_SESSION['verificador'] == "1") {

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
          <input type="file"  required  name="file" placeholder="Selecione o arquivo" accept="application/pdf"><br>
					<label>
						<select name="visibilidadePublicações">
							<option value="" selected disabled>Selecione</option>
							<option value="1">Progressões</option>
						  <option value="2">Polinômios</option>
						  <option value="3">Trigonometria</option>
					   	<option value="4">Probabilidade</option>
						  <option value="5">Geometria plana</option>
							<option value="6">Logaritmos</option>
							<option value="7">Função quadrática</option>
							<option value="8">Função afim</option>
							<option value="9">Introdução às funções</option>
							<option value="10">Números complexos</option>
							<option value="11">Conjuntos</option>
							<option value="12">Matemática básica</option>
						</select>
					</label><br/>
					<br>
          <input type="submit" value="Enviar"><br>
        </form>
      </div>
    </body>
</html>
<?php }
else{
	header("location: conteudo.php");
}?>
