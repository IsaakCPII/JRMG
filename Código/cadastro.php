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

  .cadastrinho{
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
  .a{
    border: 0;
    width: 62%;
  }
  .imgm{
    height: 30%;
    width: 30%;
  }
</style>
<script>
   function desbloqueia(){
     document.getElementById("1").disabled=false;
   }
   function bloq(){
     document.getElementById("1").disabled=true ;
   }
</script>
<html lang="pt-br">
    <head>
      <title>Cadastro</title>
    <head>
    <body>
      <div class="div_sup">
        <img class="imgm" src="b.png"/>
      </div>

      <div class="cadastrinho"> <br><br>
        <form action="Control/User/Cadastrauser.php"  method="post">
          <label><b>CADASTRO</b></label><br><br>
          <label>Nome: </label><input type="name" name="nome" required minlength= "3" maxlength= "35" placeholder="Digite seu nome." class="a"><br>
          <label>E-mail: </label><input type="email"  name="email" required  placeholder="Digite seu e-mail." class="a"><br>
          <label>Senha: </label><input type="password"  required  name="senha" placeholder="Digite sua senha." class="a"><br>
          Professor:<input type="checkbox" name="prof" onclick="desbloqueia()" value="Professor" ondblclick="bloq()"> <BR/>
          <label>Matricula: </label><input type="text"  name="matricula" id="1" placeholder="Digite sua matricula." disabled class="a"><br>
          <input type="submit" value="Enviar"><br><br>
        </form>
      </div>
    </body>
</html>
