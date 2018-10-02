<?php
	session_start();
  $email = $_SESSION['emailUsuarioLogado'];
	if ($_SESSION['emailUsuarioLogado'] == "") {
    $_SESSION['erroLogin'] = "Você ainda não está logado, seu merda.";
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
  .conteudos{
    position: relative;
    width:  20%;
    margin-left: 50%;
    border-radius: 10px;

  }
  .lateral{
    color:white;
    padding: 1%;
    width: 20%;
    height: 100%;
    background-image: none;
    display: block;
    position: absolute;
    margin-top: 10px;
    border-radius: 10px;
    border-style: solid;
    border-width: 5px;
    border-color: white;

  }
  .sup_estatica{
    background-color: white;
    height: 5%;
    position: relative;
    margin-top: -10px;
    margin-right: -10px;
    margin-left: -10px;
    border-style:inset;
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
        <a href="Control/User/sair.php">Sair</a>
    </div>
    <div class="lateral">
        a<br><br><br>
    </div>


    <div class="conteudos" style="max-width:500px">
      <a href="https://www.google.com/"><img class="mySlides" src="o.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="p.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="q.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="r.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="s.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="t.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="u.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="v.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="w.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="x.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="y.png" style="width:100%"></a>
      <a href="https://www.google.com/"><img class="mySlides" src="z.png" style="width:100%"></a>

    </div>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 1000); // Change image every 2 seconds
    }
    </script>

  </body>
</html>
