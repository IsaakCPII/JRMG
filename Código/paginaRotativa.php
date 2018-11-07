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
  }
</style>

<!DOCTYPE HTML>
<style media="screen">
  body, html {
    height: 100%;
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
      <?php
        require_once("Control/User/mostraConteudo.php");
        $value = $_REQUEST['value'];
        $b =  Mostra($value);
          foreach($b as $a){
            if (array_key_exists('arquivo', $a) == true) {
      ?>


      <div class="div_sup" class="content" style="transform: translateY(0px); opacity: 1;">
        <img class="imgm"  src="b.png"/>
      </div>
        <div class="cadastrinho"> <br>
          Arquivo: <?= $a['classificacao'] ?> <a href="<?= $a['arquivo']?>"> Baixar <a/><br>
          <?php
          }
          else {
            echo "aaaaa";
          }
        }
      ?>
      </div>
    </body>
</html>
