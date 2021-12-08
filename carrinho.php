<?php include "header.php" ?>

<?php
   session_start();
   header('Access-Control-Allow-Origin: *');

   if (empty($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
   }
    
    array_push($_SESSION['cart'], $_POST);

?>
<body>
  <nav>
      <div class="nav-wrapper">
        <a class="brand-logo">carrinho </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="javascript:history.back()">Continuar comprando</a></li>
          <li><a href="index.php">Menu</a></li>
          <li><a href="logoff.php">Sair</a></li>
        </ul>
      </div>
    </nav>
    
    <table class = "centered">
      <thead >
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Subtotal</th>
        </tr>
      </thead>
            <tbody>
            <?php
              require("conexao.php");
              $total = 0; 
              $idusuario = $_SESSION['idusuario'];
              foreach($_SESSION['cart'] as $produto){
              $quantidade = $produto['quantidade'];
              $preco = $produto['preco'];
              $item = $produto['item']; 
              $subtotal = $quantidade * $preco;
              $total += $subtotal;

              $stmt = $conn->prepare("INSERT INTO pedido ('item','preco','quantidade','subtotal') VALUES (?,?,?,?)");
              $stmt->bind_param("sfif",$item,$preco,$quantidade,$subtotal);
              $stmt->execute();
              
              $linha = "<tr><td>$item</td>";
              $linha .= "<td>R$ $preco</td>";
              $linha .= "<td>$quantidade</td>";
              $linha .= "<td>R$ $subtotal</td>";
            
        
              echo $linha;

             }
             ?>

            </tbody> 
    </table>
    <nav>
      <div class="nav-wrapper">
        <a class="brand-logo">Total a pagar</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li class="centered"><?php echo $total ?></li>
          <li><a href="finalizando.php">Finalizar compra</a></li>
        </ul>
      </div>
    </nav>
  </body>
</html>