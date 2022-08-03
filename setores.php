<?php 
require("validarAcesso.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php include("header.php"); ?>
<body>
<?php include("nav.php"); ?>

<!-- Header-->
<header class="bg-success py-0">
    <div class="text-center text-white">
        <h1 class="display-5 fw-bolder"> Setores </h1>
    </div>
</header>
<!-- Section-->
<section class="py-1">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php 
            include_once("manager.php");
            foreach($setores as $setor){ ?>
            <div class="col mb-5" style="width:17rem;">
                <div class="card h-100" >
                    <!-- imagem produto-->
                    <img class="card-img-top" src="imagens\<?= $setor ?>\<?= $setor ?>.jpg" alt="..." />
                    <!-- Product details-->
                    <form action="setor.php" method="GET">
                    <div class="card-body">
                        <div class="text-center">
                            <!-- nome produto-->
                            <h5 class="fw-bolder"><?= $setor ?></h5>                            
                        </div>
                    </div>                                
                    <!-- Product actions-->
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <input type="hidden" name="setor" value="<?= $setor ?>"/>
                        <input class="btn btn-success" type="submit" value="Entrar"/>
                    </div>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

</body>
</html>