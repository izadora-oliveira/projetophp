<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>folhagens</title>
</head>
<body>
  <?php
  require_once("autenticar.php");
  require("conexao.php");
  ?>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">folhagens </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">menu</a></li>
        <li><a href="carrinho.php">carrinho</a></li>
      </ul>
      
    </div>
  </nav>
    <table>
          <thead>
            <tr>
                <th>Item</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><img src="imagensdoprojeto\acelgachinesa.jpg" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item6" value="Acelga chinesa" readonly="readonly"></td>
              <td><input type="number" name="preco6" value="2.00" readonly="readonly"></td>
              <td><input type="number" name="quantidade6"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>              
            <tr>
              <td><img src="imagensdoprojeto\alface.png" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item7" value="Alface" readonly="readonly"></td>
              <td><input type="number" name="preco7" value="2.50" readonly="readonly"></td>
              <td><input type="number" name="quantidade7"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\coentro.jpg" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item8" value="Coentro" readonly="readonly"></td>
              <td><input type="number" name="preco8" value="1.50" readonly="readonly"></td>
              <td><input type="number" name="quantidade8"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\rucula.png" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item9" value="Rúcula" readonly="readonly"></td>
              <td><input type="number" name="preco9" value="2.00" readonly="readonly"></td>
              <td><input type="number" name="quantidade9"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\cebolinha.jpg" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item10" value="Cebolinha" readonly="readonly"></td>
              <td><input type="number" name="preco10" value="1.50" readonly="readonly"></td>
              <td><input type="number" name="quantidade10"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
          </tbody>
        </table>
</body>
</html>