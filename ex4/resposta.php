<!DOCTYPE HTML>
<html>
  <head>
    <title> Conversor </title>
    <meta charset="ut-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viweport"  >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <body>
    <div class="container">
      <h1 class="jumbotron"> Conversor </h1>
      <form name="kk" id="kk" method="post" action="controle/controle-conversor.php">
        <?php
          echo "O valor de ".$_GET['real']."<br>Em dolar: ".$_GET['dolar']."<br>Em euros: ".$_GET['euro'];
        ?>
      </form>
    </div>
  </body>
</html>
