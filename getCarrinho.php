<?php
require("conexao.php");
$query_ = "SELECT * FROM tbl_carrinho ";
$result = $conn->query($query_);
$itenscarrinho = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $itenscarrinho[] = [$row['cod_produto'],$row['nome'],$row['preco'],$row['qtd'],$row['subtotal']];
  }
} else {

  echo ("<script>
        window.alert('Você não possui itens cadastrados.')
    </script>");
}