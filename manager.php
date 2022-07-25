<?php

$setores = ['Frutas','Folhagens','Verduras','Raizes'];

function getProdutos($setor)
{
    require "conexao.php";

    $itens = [];
    $result = $conn->query("SELECT * FROM `tbl_produtos` WHERE `tipo` = '$setor' ");
    while ($item = $result->fetch_assoc()){
        $itens[] = $item;
    }
    
    return $itens;
}

function getCarrinho()
{
    require("conexao.php");

    $query_ = "SELECT * FROM tbl_carrinho ";
    $result = $conn->query($query_);
    $itenscarrinho = array();
    while ($row = $result->fetch_assoc()) {
    $itenscarrinho[] = [$row['cod_produto'],$row['nome'],$row['preco'],$row['quantidade'],$row['subtotal']];
    }
    return $itenscarrinho;
}