<?php

   session_start();

   if (empty($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
   }

   array_push($_SESSION['cart'], $_POST);

?>

<p>
   O Lançamento foi feito com sucesso.
   <a href="lancamento.php">finalizar compra</a>
   <a href="index.php">continuar comprando</a>
</p>