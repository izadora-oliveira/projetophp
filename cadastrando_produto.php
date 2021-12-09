<?php
session_start();

require("conexao.php");

if(isset($_POST["item"]) && isset($_POST["preco"]) && isset($_POST["quantidade"]))
{
	if(empty($_POST["quantidade"]))
		$erro = "Campo item obrigatório";
	else
	{
		//Vamos realizar o cadastro ou alteração dos dados enviados.
    $idusuario = $_SESSION['id'];
    $item   = $_POST["item"];
		$preco  = $_POST["preco"];
		$quantidade = $_POST["quantidade"];
		$subtotal = $quantidade*$preco;
		
		$stmt = $conn->prepare("INSERT INTO `pedido` (`idusuario`,`item`,`preco`,`quantidade`,`subtotal`) VALUES (?,?,?,?,?)");
		$stmt->bind_param('isdid',$idusuario, $item, $preco, $quantidade, $subtotal);
		
		if(!$stmt->execute())
		{
			$erro = $stmt->error;
		}
		else
		{
			header('Location:javascript:history.go(-1)');
		}
    
	}
}