<?php
require("conexao.php");

	
    	$idproduto  = $_POST["idproduto"];
		echo $idproduto;
		
		$stmt = $conn->prepare("DELETE * FROM `pedido` WHERE idproduto = $idproduto");
		$stmt->bind_param('i',$idproduto);

		if(!$stmt->execute())
		{
			$erro = $stmt->error;
		}
		else
		{
			header('Location:javascript:history.go(-1)');
		}


		DELETE FROM `tbl_produtos` WHERE `tbl_produtos`.`cod` = 6;