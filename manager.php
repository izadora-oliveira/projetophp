<?php


function getFolhagens()
{
    require "conexao.php";

    $itens = [];
    $result = $conn->query("SELECT `cod`, `nome`, `imagem`, `preco` FROM `tbl_produtos`");
    while ($item = $result->fetch_assoc()){
        $itens[] = $item;
    }
    
    return $itens;
}