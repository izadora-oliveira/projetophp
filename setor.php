<?php 
require("controller.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <?php include("header.php"); ?>
    <body>
        <?php 
        include("nav.php");
        include_once("manager.php");
        
        $itens = getProdutos($_GET['setor']);
        ?>
        <!-- Header-->
        <header class="bg-success py-0">
            <div class="text-center text-white">
                <h1 class="display-5 fw-bolder"><?= $_GET['setor'] ?></h1>
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
                            <form action="controller.php" method="post">
                                <div class="card-body">
                                    <div class="text-center">
                                        <!-- nome produto-->
                                        <h5 class="fw-bolder"><?= $item['nome'] ?></h5>
                                        <!-- preco produto-->
                                        R$ <?= $item['preco'] ?>
                                    </div>
                                    <input type="button" id="<?=$item['cod_produto']?>" value="-" onclick="retirar(this.id)"/>
                                    <input type="number" min="0" value="0" name="qtd<?=$item['cod_produto']?>" id="qtd<?=$item['cod_produto']?>" style="width:40%;"/>
                                    <input type="hidden" id="cod_produto" value="<?=$item['cod_produto']?>" />
                                    <input type="button" id="<?=$item['cod_produto']?>" value="+" onclick="add(this.id)"/>
                                </div>                                
                                <!-- -->
                                <div class="card-footer pt-0 border-top-0 bg-transparent">
                                    <input type="hidden" name="cod_produto" value="<?= $item['cod_produto'] ?>"/>
                                    <input type="hidden" name="nome" value="<?= $item['nome'] ?>"/>
                                    <input type="hidden" name="preco" value="<?= $item['preco'] ?>"/>
                                    <input type="hidden" name="setor" value="<?= $item['setor'] ?>"/>
                                    <input class="btn btn-success" type="submit" name="addcarrinho" value="incluir"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <!-- Bootstrap core JS-->
        
        <script type="text/javascript">
            function id_elemento( el )
            {
                return document.getElementById( el );
            }
            function retirar(id){
                if( id_elemento('qtd'+id).value >0 )
                id_elemento('qtd'+id).value = parseInt( id_elemento('qtd'+id).value )-1;
            }
            function add(id){
                id_elemento('qtd'+id).value = parseInt( id_elemento('qtd'+id).value )+1;
            }
        </script>
    </body>
</html>