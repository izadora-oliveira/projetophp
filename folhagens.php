<?php
  require_once("autenticar.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <?php
    include("header.php")
  ?>
<body>
<nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Folhagens</font></font></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="paginainicial.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Menu</font></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="carrinho.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carrinho</font></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logoff.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sair</font></font></a>
                </li>          
            </ul>
        </div>
      </div>
    </nav>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Imagem</th>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Adicionar</th>
    </tr>
  </thead>
  <tbody>
                <?php
                require "conexao.php";
                $result = $conn->query("SELECT `cod`, `nome`, `imagem`, `preco` FROM `tbl_produtos`");
                while ($aux_query = $result->fetch_assoc()) 
                {                    echo '<tr>';
                    echo '  <td><img src='.$aux_query["imagem"].'/></td>';
                    echo '  <td>'.$aux_query["cod"].'</td>';
                    echo '  <td>'.$aux_query["nome"].'</td>';
                    echo '  <td>'.$aux_query["preco"].'</td>';
                    echo '  <td>Quantidade</td>';
                    echo '  <td><a href="cadastrando_produto.php?cod=".$cod."&acao=incluir">incluir</a></td>';
                    echo '</tr>';
                }
                ?>
              </tbody>
</table>

      <table class = "centered">
        
              
      </table>
</body>
</html>