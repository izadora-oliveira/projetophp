<?php

   session_start();

   if (empty($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
   }

   array_push($_SESSION['cart'], $_POST);

?>

<p>
   Adicionado com Sucesso
   <a href="javascript:history.back()">continuar comprando</a>
   <a href="lancamento.php">finalizar</a>
</p>