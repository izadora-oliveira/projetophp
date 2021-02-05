<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>frutas</title>
</head>
<body>
  <?php
  require_once("autenticar.php")
  ?>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">frutas </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">menu</a></li>
        <li><a href="carrinho.php">carrinho</a></li>
      </ul>
    </div>
  </nav>
  <img src="imagensdoprojeto\banana.png" width="40" height="40">
  <p>banana KG
  <br>
  R$10
  <input name="produto" type="text">
  <button>Comprar</button></p>  
  <br>
  <img src="imagensdoprojeto\laranja.jpg" width="40" height="40">
  <p>laranja KG</p>
  <p>R$10</p>
  <p>
    <input name="produto" type="text">
  </p>
  <button>Comprar</button>

  
  <img src="imagensdoprojeto\manga.jpg" width="40" height="40">
  <p>manga KG</p>
  <p>R$10</p>
  <p>
    <input name="produto" type="text">
  </p>
  <button>Comprar</button>

  <br>
  <img src="imagensdoprojeto\morango.jpg" width="40" height="40">
  <p>morango KG</p>
  <p>R$10</p>
  <p>
    <input name="produto" type="text">
  </p>
  <button>Comprar</button>

  <br>
  <img src="imagensdoprojeto\goiaba.jpg" width="40" height="40">
  <p>goiaba KG</p>
  <p>R$10</p>
  <p>
    <input name="produto" type="text">
  </p>
  <button>Comprar</button>
</body>
</html>