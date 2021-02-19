<?php
   session_start();
   header('Access-Control-Allow-Origin: *');

   if (empty($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
   }
    
    array_push($_SESSION['cart'], $_POST);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>carrinho</title>
</head>
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
              $nome = $produto['item']; 
              $subtotal = $quantidade * $preco;

              $stmt = $conn->prepare("INSERT INTO pedido (idusuario,nome,preco,quantidade,subtotal) VALUES (?,?,?,?,?)");
              $stmt->bind_param("sssss",$idusuario,$nome ,$preco,$quantidade,$subtotal);
              $stmt->execute();
              
              $linha = "<tr><td>$nome</td>";
              $linha .= "<td>R$ $preco</td>";
              $linha .= "<td>$quantidade</td>";
              $linha .= "<td>R$ $subtotal</td>";
              

              $total += $subtotal;
        
              echo $linha;

             }
              $stmt = $conn->prepare("INSERT INTO pedido (idusuario,total) VALUES (?,?)");
              $stmt->bind_param("ss",$idusuario,$total);
              $stmt->execute();

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