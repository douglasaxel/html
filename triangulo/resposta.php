<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Triângulo</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <div class="container">
    <body>
      <center><h1 class="jumbotron bg-info">Triângulo</h1>
        <?php
        echo '<p>Lado 1: '.$_GET['lad1'].
             '<br>Lado 2: '.$_GET['lad2'].
             '<br>Lado 3: '.$_GET['lad3'].
             '<br>Tipo de triângulo: '.$_GET['verificar'].'<p>';
        ?>
      </center>
    </body>
  </div>
</html>
