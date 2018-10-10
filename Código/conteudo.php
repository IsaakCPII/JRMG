<?php
	session_start();
  $email = $_SESSION['emailUsuarioLogado'];
	if ($_SESSION['emailUsuarioLogado'] == "") {
    $_SESSION['erroLogin'] = "Você ainda não está logado.";
		header('Location: selec-login.php' );
	 }
?>
<!DOCTYPE html>
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
	.conteudinhos{
		background-color: white;
		margin-left: auto;
		margin-right: auto;
		float: center;
		margin-top: 1%;
		width: 69.9%;
		padding: 0.25%;
	}
	.sup_estatica{
		float: right;
	}
	a{
		color:white;
	}
</style>
<html>
  <head>
    <title>JRMG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <style>
      .mySlides {display:none;}
    </style>
  </head>
  <body>
    <div class="sup_estatica">
			<a href="envioConteudos.php">Enviar novos conteúdos</a>
      <a href="Control/User/sair.php">Sair</a>
    </div>
    <div class="conteudinhos">
      <a href="paginaRotativa.php"><img class="imagenzinhas" src="o.png"></a>
      <a href="conteudos/b.html"><img class="imagenzinhas" src="p.png"></a>
      <a href="conteudos/c.html"><img class="imagenzinhas" src="q.png"></a>
      <a href="conteudos/d.html"><img class="imagenzinhas" src="r.png"></a>
      <a href="conteudos/e.html"><img class="imagenzinhas" src="s.png"></a>
      <a href="conteudos/f.html"><img class="imagenzinhas" src="t.png"></a>
      <a href="conteudos/g.html"><img class="imagenzinhas" src="u.png"></a>
      <a href="conteudos/h.html"><img class="imagenzinhas" src="v.png"></a>
      <a href="conteudos/i.html"><img class="imagenzinhas" src="w.png"></a>
      <a href="conteudos/j.html"><img class="imagenzinhas" src="x.png"></a>
      <a href="conteudos/k.html"><img class="imagenzinhas" src="y.png"></a>
      <a href="conteudos/l.html"><img class="imagenzinhas" src="z.png"></a>
    </div>
  </body>
</html>
