<?php
  require_once("autenticar.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <?php
    include("header.php")
  ?>
<body>
<?php include("nav.php"); ?>
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
                {
                  ?>
                  <form  action = "cadastrando_produto.php" method = "POST">
                  <?php  
                    echo '<tr>';
                    echo '  <td><img src='.$aux_query["imagem"].'/></td>';
                    echo '  <td><input name="cod" type="hidden" value='.$aux_query["cod"].'>'.$aux_query["cod"].'</td>';
                    echo '  <td><input name="nome" type="hidden" value='.$aux_query["nome"].'>'.$aux_query["nome"].'</td>';
                    echo '  <td><input name="preco" type="hidden" value='.$aux_query["preco"].'>'.$aux_query["preco"].'</td>';
                    echo '  <td><input name="quantidade" class = "validate" type="number" required = ""></td>';
                    echo '  <td><button type="submit" class="card-link">Adicionar</button></td>';
                    echo '</tr>';
                  ?>
                  </form>
                  <?php
                }
                ?>
              </tbody>
</table>

      <table class = "centered">
        
              
      </table>
</body>
</html>