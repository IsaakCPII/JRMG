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
        $b =  Mostra($tipo);
        while($row = mysqli_fetch_array($b))
        {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "</tr>";
        }
      ?>


    </body>
</html>
