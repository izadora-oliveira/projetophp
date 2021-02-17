<?php
require('conexao.php');



foreach ($_SESSION['cart'] as $key => $value) :
   echo "INSERT INTO teste (nome, dinheiro) VALUES ('" . $value["name"] . "'," . $value["money"] . ")";

endforeach;

?>