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
        include("manager.php");

        $itens = getRaizes();
        foreach($itens as $item){
        
        ?>
        <form  action = "controller.php" method = "POST">
        <?php  
          echo '<tr>';
          echo '  <td><img src='.$item["imagem"].' width=80rem; height=80rem;></td>';
          echo '  <td><input name="cod" type="hidden" value='.$item["cod"].'>'.$item["cod"].'</td>';
          echo '  <td><input name="nome" type="hidden" value='.$item["nome"].'>'.$item["nome"].'</td>';
          echo '  <td><input name="preco" type="hidden" value='.$item["preco"].'>'.$item["preco"].'</td>';
          echo '  <td><input name="quantidade" class = "validate" type="number" required = ""></td>';
          echo '  <td><input type="submit" name="adicionarCarrinho" value="Adicionar"class=" btn btn-success"></td>';
          echo '</tr>';
        ?>
        </form>
        <?php } ?>
    </tbody>
  </table>
</body>
</html>