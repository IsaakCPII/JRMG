<?php
	session_start();

	if(empty($_SESSION['erroLogin']) == false)
	{
	   $erro = $_SESSION['erroLogin'];
	   unset($_SESSION['erroLogin']);
	}
	else {
		$erro = null;
	}


?>
<!DOCTYPE HTML lang="pt-br">
<style>
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
  .cadastrinho{
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
  .a{
    border: 0;
    width: 62%;
  }
  .imgm{
    height: 50%;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
  .seleca{
    height: 65%;
    width: 42%;
  }
  .selecab{
    height: 65%;
    width: 42%;
  }
</style>
<head> <title>Login</title> </head>
<HTML>
  <body>
    <div class="div_sup" class="content" style="transform: translateY(0px); opacity: 1;">
      <img class="imgm"  src="b.png"/>
    </div>

    <div class="cadastrinho"> <br>
      <?php if ($erro != null) { ?>
        <div class="alert alert-warning">
          <p> Erro: <?= $erro ?> </p>

        </div>
      <?php } ?>
      <!--ALuno--><a href="login-aluno.php"><img src="1.png" class="seleca"></a>
      <!--Professor--><a href="login-professor.php"><img src="2.png" class="selecab"></a>
    </div>
    <br><br>
  </body>
</HTML>
