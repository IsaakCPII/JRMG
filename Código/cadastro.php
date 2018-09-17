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
  }

  div{
    background-color: white;
    border-radius: 10px;
    font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
    text-align: center;
    position: absolute;
    width: 20%;
    top: 50%;
    right: 39%;
    margin-top: -72px;

  }
</style>
<html lang="pt-br">
    <head>
          <title>Cadastro</title>
    <head>
        <body>
        <img width="20%" height="35%" align="center" src="Matemática (1).png"/>
        <div> <br><br>
          <form action="Control/User/Cadastrauser.php"  method="post">


          <label><b>CADASTRO</b></label><br><br>
          <label>Nome: </label><input type="name" style="border:0; width:62%;" name="nome" required minlength= "3" maxlength= "35" placeholder="Digite seu nome."><br>
          <label>E-mail: </label><input type="email" style="border:0; width:62%;" name="email" required  placeholder="Digite seu e-mail."><br>
          <label>Senha: </label><input type="password" style="border:0; width:62%;" required  name="senha"><br><br>
          <input type="submit" value="Enviar" "><br><br>

          </form>
        </div>
        </body>
</html>
