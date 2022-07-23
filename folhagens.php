<?php
  require_once("controller.php");
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