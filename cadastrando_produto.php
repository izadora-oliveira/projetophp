<?php
$item = filter_input(INPUT_POST, 'item', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
$subtotal = $quantidade * $preco;


require("conexao.php");

$stmt = $conn->prepare("INSERT INTO pedido (item,preco,quantidade,subtotal) VALUES (?,?,?,?)");
  $stmt->bind_param("sdid",$item,$preco,$quantidade,$subtotal);
  $stmt->execute();
  $conn->close();

  header('Location:javascript:history.back()');