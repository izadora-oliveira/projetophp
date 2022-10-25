<?php
require_once("controller.php");
require('manager.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php 
include("header.php");
?>
<body>
  <?php include("nav.php"); ?>

  <div class="container px-4 px-lg-0 mt-5">
    <div class="row">

    <div class="card">
          <div class="card-body">
          <form method="post" action="login.php">
            <table class="table border-success">
              <thead>
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Subtotal</th>
                  <th scope="col">Excluir</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $total = 0;
                $itenscarrinho = getCarrinho();
                foreach ($itenscarrinho as $item)
                {
                ?>
                  <tr>
                    <?php
                    echo "<td name ='cod_produto' class='table-Default'>";
                    echo "<input type='hidden' name='cod_produto' value='$item[cod_produto]'/>$item[cod_produto]";
                    echo "</td>";
                    echo "<td name='nome' class='table-Default'>";
                    echo "<input type='hidden' name='nome' value='$item[nome]'/>$item[nome]";
                    echo "</td>";
                    echo "<td name='preco' class='table-Default'>";
                    echo "<input type='hidden' name='preco'/>R$ $item[preco]";
                    echo "</td>";
                    echo "<td name='quantidade' class='table-Default'>";
                    echo "<input type='hidden' name='quantidade' value='$item[quantidade]'/>$item[quantidade]";
                    echo "</td>";
                    echo "<td name='subtotal' class='table-Default'>";
                    echo "<input type='hidden' name='subtotal' value='$item[subtotal]'/>R$ $item[subtotal]";
                    echo "</td>";
                    echo "<td name='excluir' class='table-Default'>";
                    echo "<input type='submit' name='excluirItemCarrinho' value='Excluir' class='btn btn-danger btn-sm'/>";
                    echo "</td>";
                    echo "<input type='hidden' name='post_carrinho' value='post_carrinho'/>";
                    $total += $item['subtotal'];
                    ?> 
                  
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
            <div class="col-12">
            <input type="submit" value="Enviar Pedido" class="btn btn-success"/>
            </form>
          </div>  
          </div>
        </div>
    </div>
  </div>

</div>
    
</body>
</html>