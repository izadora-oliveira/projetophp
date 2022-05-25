<?php
session_start();

require("conexao.php");

if(isset($_POST["cod"]) && isset($_POST["preco"]) && isset($_POST["quantidade"]))
{
		//Vamos realizar o cadastro ou alteração dos dados enviados.
    	$idusuario = $_SESSION['id'];
    	$codigo   = $_POST["cod"];
		$preco  = $_POST["preco"];
		$quantidade = $_POST["quantidade"];
		$subtotal = $quantidade*$preco;
		
		$stmt = $conn->prepare("INSERT INTO `tbl_carrinho` (`idusuario`,`codigo`,`preco`,`qtd`,`subtotal`) VALUES (?,?,?,?,?)");
		$stmt->bind_param('isdid',$idusuario, $codigo, $preco, $quantidade, $subtotal);
		
		if(!$stmt->execute())
		{
			$erro = $stmt->error;
		}
		else
		{
			header('Location:javascript:history.go(-1)');
		}
}