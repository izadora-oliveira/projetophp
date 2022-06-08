<?php
session_start();
require("conexao.php");

$cod_cli  = $_SESSION['id'];
$cod      = $_POST['cod'];
$nome     = $_POST['nome'];
$preco    = $_POST['preco'];
$qtd      = $_POST['quantidade'];
$subtotal = $qtd * $preco;

$stmt = $conn->prepare("INSERT INTO tbl_carrinho (cod_cli,cod_produto,nome,preco,qtd,subtotal) VALUES (?,?,?,?,?,?)");
$stmt->bind_param('iisdid',$cod_cli,$cod,$nome,$preco,$qtd,$subtotal);
$stmt->execute();
$conn->close();

echo ("<script>
		window.alert('Cadastro realizado com Sucesso!')
		window.location.href='folhagens.php';
	</script>");