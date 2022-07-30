<?php 
require("validarAcesso.php");
require("controller.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php include("header.php"); ?>
    <body>
        <?php 
        include("nav.php");
        include_once("manager.php");
        
        foreach($setores as $setor)
        {
            $itens = getProdutos($setor);
            ?>
            <!-- Header-->
            <header class="bg-success py-0">
                <div class="text-center text-white">
                    <h1 class="display-5 fw-bolder"><?= $setor ?></h1>
                </div>
            </header>
            <!-- Section-->
            <section class="py-1">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <?php foreach($itens as $item){ ?>
                        <div class="col mb-5" style="width:13rem;">
                            <div class="card h-100" >
                                <!-- imagem produto-->
                                <img class="card-img-top" src="<?= $item['imagem'] ?>" alt="..." />
                                <!-- Product details-->
                                <form action="controller.php" method="POST">
                                <div class="card-body">
                                    <div class="text-center">
                                        <!-- nome produto-->
                                        <h5 class="fw-bolder"><?= $item['nome'] ?></h5>
                                        <!-- preco produto-->
                                        R$ <?= $item['preco'] ?>
                                    </div>
                                    <label>Quantidade</label>
                                    <input class="form-control" type="number" name="quantidade" id="quantidade" />
                                </div>                                
                                <!-- Product actions-->
                                <div class="card-footer pt-0 border-top-0 bg-transparent">
                                    <input type="hidden" name="cod_produto" id="cod_produto" value="<?= $item['cod_produto'] ?>"/>
                                    <input type="hidden" name="nome" id="nome" value="<?= $item['nome'] ?>"/>
                                    <input type="hidden" name="preco" id="preco" value="<?= $item['preco'] ?>"/>
                                    <input class="btn btn-success" type="submit" name="addcarrinho" value="Adicionar"/>
                                </div>
                                </form>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>