<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Nota fiscal</title>
</head>
<body>
    <nav>
      <div class="nav-wrapper">
        <a class="brand-logo">Nota fiscal </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
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
                session_start();

              $total = 0; 
              foreach($_SESSION['cart'] as $produto){
              $quantidade = $produto['quantidade'];
              $preco = $produto['preco'];
              $nome = $produto['item']; 
              $subtotal = $quantidade * $preco;
              
              $linha = "<tr><td>$nome</td>";
              $linha .= "<td>R$ $preco</td>";
              $linha .= "<td>$quantidade</td>";
              $linha .= "<td>R$ $subtotal</td>";
              

              $total += $subtotal;
        
              echo $linha;

             }
             ?>
        
            </tbody> 
    </table>
    <nav>
      <div class="nav-wrapper">
        <a class="brand-logo">Total a pagar</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li class="brand-logo"><?php echo $total ?></li>
        </ul>
      </div>
    </nav>
    <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Endereço de entrega</span>
          <p><?php  $endereco = $_GET("endereco");
          echo $endereco    ?></p>
          <span class="card-title">Pagamento</span>
          <p><?php $pagamento = $_GET("pagamento");
          echo $pagamento    ?></p>
          <span class="card-title">Data do pedido</span>
          <p></p>
        </div>
              
              
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>