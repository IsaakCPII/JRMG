<?php
	session_start();

	$erro=null;
	if(empty($_SESSION['erro']) == false)
	{
		$erro = $_SESSION['erro'];
		unset($_SESSION['erro']);
	}

	if (empty($_SESSION['emailUsuarioLogado']) == true) {
      $_SESSION['erroLogin'] = "Você ainda não está logado.";
  		header('Location: selec-login.php');
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
			<?php if ($erro != null) { ?>
        <div class="erro">
          <p> Erro: <?= $erro ?> </p>

        </div>
      <?php } ?>
			<?php if (empty($_SESSION['emailUsuarioLogado']) == true	) { ?>
				<a href="envioConteudos.php">Enviar novos conteúdos</a>
			<?php }?>
			<a href="Control/User/sair.php">Sair</a>
    </div>
    <div class="conteudinhos">
      <a href="paginaRotativa.php?value=1"><img class="imagenzinhas" src="../imagens/o.png"></a>
      <a href="paginaRotativa.php?value=2"><img class="imagenzinhas" src="../imagens/p.png"></a>
      <a href="paginaRotativa.php?value=3"><img class="imagenzinhas" src="../imagens/q.png"></a>
      <a href="paginaRotativa.php?value=4"><img class="imagenzinhas" src="../imagens/r.png"></a>
      <a href="paginaRotativa.php?value=5"><img class="imagenzinhas" src="../imagens/s.png"></a>
      <a href="paginaRotativa.php?value=6"><img class="imagenzinhas" src="../imagens/t.png"></a>
      <a href="paginaRotativa.php?value=7"><img class="imagenzinhas" src="../imagens/u.png"></a>
      <a href="paginaRotativa.php?value=8"><img class="imagenzinhas" src="../imagens/v.png"></a>
      <a href="paginaRotativa.php?value=9"><img class="imagenzinhas" src="../imagens/w.png"></a>
      <a href="paginaRotativa.php?value=10"><img class="imagenzinhas" src="../imagens/x.png"></a>
      <a href="paginaRotativa.php?value=11"><img class="imagenzinhas" src="../imagens/y.png"></a>
      <a href="paginaRotativa.php?value=12"><img class="imagenzinhas" src="../imagens/z.png"></a>
    </div>
  </body>
</html>
