<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Cadastro de Produto</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <style>
  body{
    background-image: url("pika.jpg");
  }
  </style>
  <body>
    <div class="container">
      <h1 class="jumbotron">Cadastro de Produto</h1>
      <form name="cadprod" id="cadprod" method="POST" action="controle/controle.php">

        <div class="form-group">
          <input type="text" name="txtnome" placeholder="Digite o nome do produto" autofocus class="form-control">
        </div>

        <div class="row">
          <div class="form-group col-md-4">
            <input type="text" name="txtvalor" placeholder="Digite o valor" autofocus class="form-control">
          </div>

          <div class="form-group col-md-8">
            <input type="text" name="txtquantidade" placeholder="Digite a quantidade" autofocus class="form-control">
          </div>
        </div>

        <div class="form-group">
          <input type="submit" value="Cadastrar" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-warning">
        </div>
      </div>
    </form>
  </body>
</html>
