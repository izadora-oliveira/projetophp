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


<div class="card-group">
   <?php 
   include("manager.php");

   $itens = getFolhagens();
   foreach($itens as $item){
    ?>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $item['imagem']?>" alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $item['nome']?></h5>
        <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
        <input name="addcarrinho" value="Adicionar" class="btn btn-primary"/>
      </div>
    </div> 
<?php
   }
   ?>  
</div>

  
    
</body>
</html>



<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
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

            $itens = getFolhagens();
            foreach($itens as $item){
            
            ?>
            <form  action = "controller.php" method = "POST">
            <?php  
              echo '<tr>';
              echo '  <td><img src='.$item["imagem"].' width=80rem; height=80rem;></td>';
              echo '  <td><input name="cod" type="hidden" value='.$item["cod"].'>'.$item["cod"].'</td>';
              echo '  <td><input name="nome" type="hidden" value='.$item["nome"].'>'.$item["nome"].'</td>';
              echo '  <td>R$<input class="form-control name="preco" type="number" value='.$item["preco"].' readonly></td>';
              echo '  <td><input class="form-control name="quantidade" class = "validate" type="number" required = ""></td>';
              echo '  <td><input type="submit" name="adicionarCarrinho" value="Adicionar"class=" btn btn-success"></td>';
              echo '</tr>';
            ?>
            </form>
            <?php } ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
      </div>
    </div>
  </div>
</div>  