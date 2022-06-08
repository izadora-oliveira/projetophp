<?php
require("conexao.php");
	
$cod_produto  = $_POST["cod_produto"];

$query_ = "DELETE FROM `tbl_carrinho` WHERE `cod_produto` = $cod_produto";
$result = $conn->query($query_);

echo ("<script>
    window.alert('item Excluido!')
    window.location.href='carrinho.php';
    </script>");