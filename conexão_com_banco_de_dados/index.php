<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conexão Banco de Dados</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>

<body>
  <h1>EXIBINDO BANCO DE DADOS DO PHPMYADMIN<h1>
      <?php
      $show = "SHOW DATABASES";

      $conexao = new mysqli("localhost", "root", "");

      $banco = mysqli_select_db($conexao, "mysql");

      $consulta = mysqli_query($conexao, $show);

      while ($num = mysqli_fetch_assoc($consulta)) {
        echo "-----------------------------------------<br />";
        echo "Nome: " . $num["Database"] . "<br />";
      }
      ?>
</body>

</html>