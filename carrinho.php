<?php 
require_once("autenticar.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php 
include("header.php");
?>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carrinho</font></font></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="javascript:void(0)" onClick="history.go(-1); return false;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voltar</font></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="paginainicial.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Menu</font></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logoff.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sair</font></font></a>
                </li>          
            </ul>
        </div>
      </div>
    </nav>
    
    <table class = "centered">
      <thead >
        <tr>
            <th>idproduto</th>
            <th>Item</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Subtotal</th>
            <th>Excluir</th>
        </tr>
      </thead>
        <tbody>
            <?php
            require("conexao.php");

            $acao = $_GET['acao'];
            $cod =  $_GET['cod'];
          
            // Verificamos se a acao é igual a incluir
            if ($acao == "incluir")
            {
              $result = $conn->query("SELECT * FROM tbl_produtos WHERE cod ='$cod'");

                if ($result->num_rows > 0) {
                  $stmt = $conn->prepare("INSERT INTO `tbl_carrinho` (`cod`,`nome`,`preco`,`quantidade`,`subtotal`) VALUES (?,?,?,?,?)");
                  $stmt->bind_param('isdid',$idusuario, $item, $preco, $quantidade, $subtotal);
                  $stmt->execute();
                    
                  header('Location:produtos.php');
                }
              }?>

        </tbody>
    </table>
  </body>
</html>