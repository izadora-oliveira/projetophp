<?php


function getFolhagens()
{
    require "conexao.php";

    $itens = [];
    $result = $conn->query("SELECT `cod`, `nome`, `imagem`, `preco` FROM `tbl_produtos` WHERE `tipo` = 'folhagens'");
    while ($item = $result->fetch_assoc()){
        $itens[] = $item;
    }
    
    return $itens;
}

function getFrutas()
{
    require "conexao.php";

    $itens = [];
    $result = $conn->query("SELECT `cod`, `nome`, `imagem`, `preco` FROM `tbl_produtos` WHERE `tipo` = 'frutas'");
    while ($item = $result->fetch_assoc()){
        $itens[] = $item;
    }
    
    return $itens;
}

function getRaizes()
{
    require "conexao.php";

    $itens = [];
    $result = $conn->query("SELECT `cod`, `nome`, `imagem`, `preco` FROM `tbl_produtos` WHERE `tipo` = 'raizes'");
    while ($item = $result->fetch_assoc()){
        $itens[] = $item;
    }
    
    return $itens;
}

function getVerduras()
{
    require "conexao.php";

    $itens = [];
    $result = $conn->query("SELECT `cod`, `nome`, `imagem`, `preco` FROM `tbl_produtos` WHERE `tipo` = 'verduras'");
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
    $itenscarrinho[] = [$row['cod_produto'],$row['nome'],$row['preco'],$row['qtd'],$row['subtotal']];
    }
    return $itenscarrinho;
}