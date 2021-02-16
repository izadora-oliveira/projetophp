<?php
   session_start();

echo "<pre>";
   print_r($_SESSION['cart']);
echo "</pre>";

foreach ($_SESSION['cart'] as $key => $value) :
   $query = implode(',', $value);
   echo "INSERT INTO teste (nome, dinheiro) VALUES ('{$query}')";

endforeach;

foreach ($_SESSION['cart'] as $key => $value) :
    echo "INSERT INTO teste (nome, dinheiro) VALUES ('" . $value["name"] . "'," . $value["money"] . ")";
 
 endforeach;