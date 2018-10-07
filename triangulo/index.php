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
      <center><h1 class="jumbotron">Triângulo</h1></center>
      <form name="cadtri" method="POST" action="controle/controle-triangulo.php">
        <div class="form-group">
          <input type="number" name="lad1" placeholder="Digite o lado 1" autofocus class="form-control">
        </div>
        <div class="form-group">
          <input type="number" name="lad2" placeholder="Digite o lado 2" class="form-control">
        </div>
        <div class="form-group">
          <input type="number" name="lad3" placeholder="Digite o lado 3" class="form-control">
        </div>
        <center><div>
          <input type="submit" value="Verificar" class="btn btn-preimary">
          <input type="reset" value="Limpar" class="btn btn-danger">
        </div></center>
      </form>
    </body>
  </div>
</html>
