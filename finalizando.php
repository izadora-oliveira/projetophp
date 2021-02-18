<?php
require("conexao.php");
session_start();

$total = 0; 
              foreach($_SESSION['cart'] as $produto){
              $quantidade = $produto['quantidade'];
              $preco = $produto['preco'];
              $nome = $produto['item']; 
              $subtotal = $quantidade * $preco;
              $total += $subtotal;
              $idusuario = $_SESSION['idusuario'];

          $stmt = $conn->prepare("INSERT INTO pedido (idusuario,nome,preco,quantidade,subtotal) VALUES (?,?,?,?,?)");
          $stmt->bind_param("sssss",$idusuario,$nome ,$preco,$quantidade,$subtotal);
          $stmt->execute();
        }
          $stmt = $conn->prepare("INSERT INTO pedido (idusuario,total) VALUES (?,?)");
          $stmt->bind_param("ss",$idusuario,$total);
          $stmt->execute();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>pedidos</title>
</head>
<body>
<nav>
        <div class="nav-wrapper">
        <a class="brand-logo">Finalizar pedido </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="carrinho.php">Voltar</a></li>
        </ul>
        </div>
    </nav>
    <form method="POST" action="meuspedidos.php" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="usuario" class = 'validate' required = "" id="name" type="text" class="validate" placeholder="Nome" />
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="endereco" class = 'validate' required = "" id="endereço" type="text" class="validate" placeholder="Endereço" />
        </div>
      </div>
      <!-- <div class="col col-center-3 "> -->
      <div class="input-field col s12">
          <select name="pagamento" class="form-control center" required>
                                <option value="" disabled selected>Forma de pagamento</option>
                                <option value="Dinheiro">Dinheiro</option>
                                <option value="Débito">Débito</option>
                                <option value="Crédito">Crédito</option>
                            </select>
        </div>
          <!-- <form action="#">
          <h5>Forma de Pagamento</h5>
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Dinheiro</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Crédito</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>Débito</span>
      </label>
    </p> -->
      </div>
      <button class="btn btn-primary " role="button" >enviar</button>
    </form>
    
</body>
</html>