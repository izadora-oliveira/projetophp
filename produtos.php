<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Feira Delivery</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
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
                                <!-- Product image-->
                                <img class="card-img-top" src="<?= $item['imagem'] ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $item['nome'] ?></h5>
                                        <!-- Product price-->
                                        R$ <?= $item['preco'] ?>
                                    </div>
                                </div>
                                <form action="controller.php" method="POST">
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <input type="hidden" name="cod_produto" id="cod_produto" value="<?= $item['cod_produto'] ?>"/>
                                    <input type="hidden" name="nome" id="nome" value="<?= $item['nome'] ?>"/>
                                    <input type="hidden" name="preco" id="preco" value="<?= $item['preco'] ?>"/>
                                    <label>Quantidade</label>
                                    <input class="form-control" type="number" name="quantidade" id="quantidade" />
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