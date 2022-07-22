<?php
require_once("autenticar.php")
?>

<!doctype html>
<html lang="pt-BR">
<?php
include("header.php")
?>
<body>
  <style>
    .background-radial-gradient {
      background-image: url("imagens/index.png");
    }
  </style>
  
  <?php
    include("nav.php")
  ?>

  <!-- Section: Design Block -->
  <section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5  my-5">
    <div class="row">
      <?php
      $setores = ['folhagens','raizes','frutas','verduras'];
      foreach($setores as $setor){
        ?>
        <div class="col-sm-3">
        <div class="card" style="width: 16rem; height:18rem;">
          <img src="imagens\<?php  echo  $setor?>\<?php echo  $setor ?>.jpg" class="card-img-top">
          <div class="card-body">
            <a href="<?= $setor ?>.php" class="btn btn-success"><?php echo $setor ?></a>
          </div>
        </div>
      </div>
        <?php
      }
      ?>
    </div>
      
    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>