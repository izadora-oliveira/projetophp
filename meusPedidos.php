<?php
require("validarAcesso.php");
?>
<!DOCTYPE html>

<?php 
include("header.php");
include("manager.php");
?>
<body>
    <div class="container">
        <?php
        include("nav.php");
        $i=0;
        $pedidos = getPedidos();
        $info_pedido = $pedidos[0];
        ?>
        <div class="container"> <?php
            foreach($info_pedido as $info)
            { ?>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item card l-bg-orange">           

                        <div class="col-xl-12 col-lg-6">
                            <div class="card-statistic-3 p-4">                                  
                                <div class="mb-4">
                                    <h6 class="card-title mb-0"><?= 'Pedido #'.$info['cod_pedido'] ?></h6>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h3 class="d-flex align-items-center mb-0">
                                        <?= 'Total: R$'.$info['total'] ?>
                                        </h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span><?= $info['dthr_cadastro'] ?> </span>
                                    </div>
                                </div>
                                <h6 class="accordion-header" id="heading<?= $i; ?>" style="width: 10rem;">
                                    <button class="button-detalhes ccordion-button <?= ($i>0) ? 'collapsed' : ''; ?>"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $i; ?>"
                                        aria-expanded="<?= ($i==0) ? 'true' : 'false'; ?>" aria-controls="collapse<?= $i;?>">
                                        <?= 'Detalhes' ?>
                                    </button>
                                </h6>
                            </div>
                        </div>  

                        <div id="collapse<?= $i; ?>" class="accordion-collapse collapse <?= ($i==0) ? 'show' : ''; ?>" aria-labelledby="heading<?= $i; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body row">
                                <div class="col-sm-6">
                                    <div class="card" style="background-color: transparent;">
                                        <div class="card-body">
                                            <h5 class="card-title">Produtos</h5>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Código</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Preço</th>
                                                    <th scope="col">Quantidade</th>
                                                    <th scope="col">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $total = 0;
                                                    $itens = $pedidos[1];
                                                    foreach($itens as $item){
                                                        ?> 
                                                        <tr>
                                                            <?php
                                                            if($item['cod_pedido'] == $info['cod_pedido'])
                                                            {
                                                                foreach($item as $key => $value)
                                                                {                                             
                                                                    if ($key != 'cod_pedido'){
                                                                    ?> 
                                                                    <td><?php $key == 'preco' || $key == 'subtotal' ? print "R$ ".$value : print $value ?></td>
                                                                    <?php
                                                                    if ($key == 'subtotal'){
                                                                        $total += $value;
                                                                    }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </tr>
                                                        <?php
                                                    } 
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div>
                                                <h5 class="card-title">Total <?= $total ?></h5>
                                                <p class="card-text"></p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card" style="background-color: transparent;">
                                        <div class="card-body">
                                            <h5 class="card-title">Informações</h5>
                                            <ol class="list-group">
                                                <?php
                                                foreach($info as $key => $value){
                                                    if($key != 'cod_pedido' && $key != 'cod_cli' && $key != 'total'){
                                                        ?> 
                                                        <li class="list-group-item d-flex justify-content-between align-items-start" style="background-color: transparent;">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><?= $key ?></div>
                                                                <?= $value ?>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </ol>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <form method="post" action="controller.php">
                                                <input type='hidden' name='cod_pedido' id='cod_cli' value='<?= $info['cod_pedido'] ?>'/>
                                                <input type='submit' name='deletePedido' value='Excluir' class='btn btn-danger btn-sm'/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                    ?>
                </div>
                <?php
            } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>
</html>
