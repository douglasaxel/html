<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro pessoa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

    </style>
  </head>
  <body>
    <div class="container">
      <h1 draggable="true" class="jumbotron bg-warning" style="text-align: center;">Ficha cadastral</h1>
      <form name="cadpessoa" method="post" action="controle/controle.php" class="form-group">
        <div class="form-group">
          <label id="lblnome" for="nome">Nome</label>
          <input type="text" name="nome" placeholder="Digite seu nome" pattern="^[A-z ]{2,20}$" autofocus required class="form-control col-md-4">
        </div>
        <div class="form-group">
          <label id="lblsobre" for="sobrenome">Sobrenome</label>
          <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" pattern="^[A-z ]{2,30}$$" required class="form-control col-md-4">
        </div>
        <div class="form-inline">
          <label for="dia">Data de nascimento</label>
        </div>
        <div class="form-inline">
          <select name="dia" required class="form-control col-md-1">
            <?php
              for ($i = 31; $i > 0; $i--) {
                echo '<option value="'.$i.'">'.$i.'</option>';
              }
            ?>
          </select>
          <select name="mes" required class="form-control col-md-1">
            <?php
              for ($i = 12; $i > 0; $i--) {
                echo '<option value="'.$i.'">'.$i.'</option>';
              }
            ?>
          </select>
          <select name="ano" required class="form-control col-md-1">
            <?php
              for ($i = 2018; $i >= 1900; $i--) {
                echo '<option value="'.$i.'">'.$i.'</option>';
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="renda">Renda</label>
          <input type="text" name="renda" placeholder="Digite sua renda" pattern="^[0-9]{0,10}$" required class="form-control col-md-2">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" name="email" placeholder="Digite seu e-mail" pattern="^[-_.]{0,3}[A-z0-9]{1,30}[-_.]{0,3}[A-z0-9]{1,30}[-_.]{0,3}@[A-z0-9]{3,20}.[A-z.]{2,10}$" required class="form-control col-md-4">
        </div>
        <div class="form-group">
          <label for="sexo">Sexo</label>
          <select name="sexo" class="form-control col-md-2">
            <option value="masculino">Masculino</option>
            <option value="feminio">Feminino</option>
          </select>
        </div>
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="number" name="cpf" placeholder="Digite seu CPF" pattern="^[0-0]{11}$" required class="form-control col-md-2">
        </div>
        <div class="form-group">
          <label for="rg">RG</label>
          <input type="number" name="rg" placeholder="Digite seu RG" pattern="^[0-9]{7,15}$" required class="form-control col-md-2">
        </div>
        <div class="form-group">
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" placeholder="Ex: Rua Antonio, 25" pattern="^[A-z. ]{6,40},( )?[0-9]{1,6}$" required class="form-control col-md-4">
        </div>
        <div class="form-group">
          <label for="complemento">Complemento</label>
          <input type="text" name="complemento" placeholder="Digite o complemento" pattern="^[A-z]{4,20}$" class="form-control col-md-2">
        </div>
        <div class="form-group">
          <label for="bairro">Bairro</label>
          <input type="text" name="bairro" placeholder="Digite seu bairro" pattern="^[A-z ]{3,30}$" required class="form-control col-md-4">
        </div>
        <div class="form-group">
          <label for="cep">CEP</label>
          <input type="number" name="cep" placeholder="Digite seu CEP" pattern="^[0-9]{8}$" required class="form-control col-md-2">
        </div>
        <div class="form-group">
          <label for="cidade">Cidade</label>
          <input type="text" name="cidade" placeholder="Digite sua cidade" pattern="^[A-z ]{3,25}$" required class="form-control col-md-4">
        </div>
        <div class="form-group">
          <label for="estado">UF</label>
          <input type="text" name="estado" placeholder="Digite sua UF" pattern="^[A-z]{2}$" required class="form-control col-md-1">
        </div>
        <div class="form-inline">
            <input type="submit" value="Cadastrar" class="btn btn-primary" style="margin-right: 10px;">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>
      </form>
    </div>
  </body>
</html>
