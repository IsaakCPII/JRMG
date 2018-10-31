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
	.erro{
		height: 10%;
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
</style>
<head> <title>Login</title> </head>
<HTML>
  <body>
    <div class="div_sup" class="content" style="transform: translateY(0px); opacity: 1;">
      <img class="imgm"  src="b.png"/>
    </div>
    <div class="cadastrinho"> <br>


        <div class="erro">

        </div>


      <form action="Control/User/cadastraMatricula.php"  method="post">
        <label><b>Cadastrar professor</b></label><br><br>
        <label> Nome: </label><input type="text"  name="nome" required  placeholder="Digite o nome" class="a"><br>
        <label> Matrícula: </label><input type="text"  name="matricula" required  placeholder="Digite a matrícula" class="a"><br><br>

        <input type="submit" value="Cadastrar"><br>
      </form>
    </div>
    <br><br>
  </body>
</HTML>
