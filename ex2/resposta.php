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
          echo '<p>Os valores de x1, x2, y1, y2 são respectivamente: '.$_GET['x1'].', '.$_GET['x2'].', '.$_GET['y1'].', '.$_GET['y2'].' </p>';
          echo '<br>A distancia entre A e B é: '.$_GET['calculo'];
        ?>
    </div>
  </body>
</html>
