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
            foreach($info_pedido as $info){
        ?>
        <div class="accordion" id="accordionExample" style="width: 30rem;">
            <div class="accordion-item"  style="width: 30rem;">
                <h5 class="card-title"><?= 'Pedido #'.$info['cod_pedido'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= 'Total: R$'.$info['total'] ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $info['dthr_cadastro'] ?></h6>   
               
                <h2 class="accordion-header" id="heading<?= $i; ?>" style="width: 10rem;">
                    <button class="accordion-button <?= ($i>0) ? 'collapsed' : ''; ?>"      type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse<?= $i; ?>"
                            aria-expanded="<?= ($i==0) ? 'true' : 'false'; ?>" aria-controls="collapse<?= $i; ?>">
                        <?= 'Detalhes' ?>
                    </button>
                </h2>
                <div id="collapse<?= $i; ?>" class="accordion-collapse collapse <?= ($i==0) ? 'show' : ''; ?>" aria-labelledby="heading<?= $i; ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
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
            </div>
            <?php
            $i++;
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>
</html>
