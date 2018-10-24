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
</style>

<html lang="pt-br">
    <head>
      <title>Conteúdos</title>
    <head>
    <body>
      <?php
<<<<<<< HEAD

        $b =  Mostra($value);
        foreach($b as $c){
            echo "<tr>";
            echo "<td>" . $c['classificacao'] . "</td><br>";
            echo "<td>" . $c['arquivo'] . "</td><br>";
            echo "</tr>";
=======
        $b =  Mostra($tipo);
        while($row = mysqli_fetch_array($b))
        {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "</tr>";
>>>>>>> b2276ae0987812ac7919108a33afb64d43862741
        }
      ?>


    </body>
</html>
