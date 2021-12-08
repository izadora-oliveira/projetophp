<?php include "header.php" ?>

<body>
<?php
require_once("autenticar.php")
?>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Menu </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="carrinho.php">Carrinho</a></li>
        <li><a href="meuspedidos.php">Meus pedidos</a></li>
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