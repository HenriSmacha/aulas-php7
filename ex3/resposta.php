<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Resposta</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <!-- <style>
  body{
    background-image: url("pika.jpg");
  }
  </style> -->
  <body>
    <div class="container">
      <h1 class="jumbotron">Resposta</h1>
        <?php
          echo ' Valor de A: '.$_GET['A'].'<br>Valor de B: '.$_GET['B'].'<br> Valor de C: '.$_GET['C'];
          echo '<hr>Valor de X1 : '.$_GET['x1'].'<br> Valor de X2: '.$_GET['x2'];
        ?>
    </div>
  </body>
</html>
