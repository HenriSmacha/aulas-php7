<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Resposta</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
      <script src="vendor/components/jquery/jquery.min.js"></script>
      <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="jumbotron">Resposta</h1>
      <?php
      if(isset($_SESSION['r'])){
        include "modulo/register.class.php";
        $r = unserialize($_SESSION['r']);
        echo $r;
      }
      ?>
    </div>
  </body>
</html>
