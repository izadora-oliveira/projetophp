<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>menu</title>
</head>
<body>
<?php
require_once("autenticar.php")
?>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Menu </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="carrinho.php">Carrinho</a></li>
        <li><a href="logoff.php">Sair</a></li> 
      </ul>
    </div>
  </nav>
<div class="collection">
        <a href="frutas.php" class="collection-item">Frutas</a>
        <a href="verduras.php" class="collection-item active">Verduras</a>
        <a href="folhagens.php" class="collection-item">Folhagens</a>
        <a href="raizes.php" class="collection-item">Raízes</a>
      </div>
</body>
</html>