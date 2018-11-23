<?php
  require_once('Control/User/mostraConteudo.php');
  $value = $_REQUEST['value'];
?>
<!DOCTYPE HTML>
<style media="screen">
  body, html {
    height: 100%;
  }

  body {
    color:
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
  a{
    color: black;
    font-style:oblique;
  }
  p{
    color: black;
    font-style:oblique;
  }

  .cadastrinho{
    padding: 1%;
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
      <title>Conteúdos</title>
    <head>
    <body>
      <div class="div_sup" class="content" style="transform: translateY(0px); opacity: 1;">
        <a href="conteudo.php"><img class="imgm"  src="../imagens/b.png"/></a>
      </div>
      <div class="cadastrinho">
        <?php
          require_once("Control/User/mostraConteudo.php");
          $value = $_REQUEST['value'];
          $b =  Mostra($value);
          foreach($b as $a){
            if (array_key_exists('arquivo', $a) == true) {
        ?>
          <strong>Arquivo: <?= $a['classificacao'] ?> <a href="<?= $a['arquivo']?>"> Baixar <a/> <a href="Control/User/apaga.php?arq=<?= $a['arquivo'] ?>">Deletar</a></strong><br>
          <?php
            }
            else {
              ?>
               <p><strong> Nenhum arquivo enviado </strong></p>
            <?php }
          }
            ?>
      </div><br>
    </body>
</html>
