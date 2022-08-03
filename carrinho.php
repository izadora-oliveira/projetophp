<?php
require("validarAcesso.php");
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

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
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
                <form method="post" action="controller.php">
                  <?php
                  echo "<td name ='cod_produto' class='table-Default'>";
                  echo "<input type='hidden' name='cod_produto' id='cod_produto' value='$item[cod_produto]'/>$item[cod_produto]";
                  echo "</td>";
                  echo "<td name='nome' class='table-Default'>";
                  echo "<input type='hidden' name='nome' id='nome' value='$item[nome]'/>$item[nome]";
                  echo "</td>";
                  echo "<td name='preco' class='table-Default'>";
                  echo "<input type='hidden' name='preco' id='preco' />R$ $item[preco]";
                  echo "</td>";
                  echo "<td name='quantidade' class='table-Default'>";
                  echo "<input type='hidden' name='quantidade' id='quantidade'value='$item[quantidade]'/>$item[quantidade]";
                  echo "</td>";
                  echo "<td name='subtotal' class='table-Default'>";
                  echo "<input type='hidden' name='subtotal' id='subtotal'value='$item[subtotal]'/>R$ $item[subtotal]";
                  echo "</td>";
                  echo "<td name='excluir' class='table-Default'>";
                  echo "<input type='submit' name='excluirItemCarrinho' value='Excluir' class='btn btn-danger btn-sm'/>";
                  echo "</td>";
                  $total += $item['subtotal'];
                  ?> 
                </form>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>  
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card border-success">
          <div class="card-body">
          <form action="controller.php" method="POST" class="row g-3" >
          
          <div class="col-6">
            <label for="cep" class="form-label">Cep</label>
              <input type="text" class="form-control" name="cep" id="cep" required pattern="\d{8}" placeholder="ex: 12345 123" />
          </div>
          <div class="col-6">
            <label for="numero" class="form-label">Nº</label>
              <input type="number" name="numero" id="numero" class="form-control" required />
          </div>
          <div class="col-6">
            <label for="rua" class="form-label">Rua</label>
              <input type="text" name="rua" id="rua" class="form-control" required >
          </div>
          <div class="col-6">
            <label for="bairro" class="form-label">Bairro</label>
              <input type="text" name="bairro" id="bairro" class="form-control" required />
          </div>
          <div class="col-6">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" type="tel" name="celular" id="celular" class="form-control" id="celular" required pattern="\d{11}" placeholder="ex: 12 12345 1234" />
          </div>
          <div class="col-6">
            <label for="inputState" class="form-label">Forma de Pagamento</label>
            <select name="forma_pagamento" id="inputState" class="form-select" required>
              <option></option>
              <option>Cartão de crédito</option>
              <option>Cartão de débito</option>
              <option>Dinheiro</option>
            </select>
          </div>
          <div class="col-12">
            <input type="submit" name="finalizar_pedido" value="Finalizar Pedido" class="btn btn-success"/>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

</div>
    
</body>
</html>