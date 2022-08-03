<?php
require("controller.php");

$setores = ['Folhagens','Frutas','Verduras','Raizes'];

function getProdutos($setor)
{   
    require "conexao.php";

    $itens = [];
    $result = $conn->query("SELECT * FROM `tbl_produtos` WHERE `setor` = '$setor' ");
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
    $itenscarrinho[] = $row;
    }
    return $itenscarrinho;
}

function getPedidos()
{
    require("conexao.php");

    $cod_cli = $_SESSION['cod_cli'];
    $pedidos = array();
    $info_pedido = array();
    $query_ = "SELECT * FROM meus_pedidos where cod_cli = $cod_cli";
    $result = $conn->query($query_);

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $info_pedido []= $row;
        }

        $pedidos[0] = $info_pedido;
        $itens = array();
        $query_   = "SELECT * FROM itens_pedido";
        $result   = $conn->query($query_);
        while ($row = $result->fetch_assoc())
        {
            $itens[] = $row;
        }
    
    } else {
        echo ("<script>
                window.alert('Você não possui Pedidos cadastrados.')
            </script>");
    }

    $pedidos[1] = $itens;
    return $pedidos;
}