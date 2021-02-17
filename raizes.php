<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>raizes</title>
</head>
<body>
  <?php
  require_once("autenticar.php");
  require("conexao.php");
  ?>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">raizes </a>
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
              <td><img src="imagensdoprojeto\jerimun.jpg" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item11" value="Jerimun" readonly="readonly"></td>
              <td><input type="number" name="preco11" value="2.50" readonly="readonly"></td>
              <td><input type="number" name="quantidade11"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\cara.jpg" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item12" value="Cará" readonly="readonly"></td>
              <td><input type="number" name="preco12" value="2.00" readonly="readonly"></td>
              <td><input type="number" name="quantidade12"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\inhame.jpg" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item13" value="Inhame" readonly="readonly"></td>
              <td><input type="number" name="preco13" value="1.50" readonly="readonly"></td>
              <td><input type="number" name="quantidade13"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\mandioca.jpg" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item14" value="Mandioca" readonly="readonly"></td>
              <td><input type="number" name="preco14" value="2.50" readonly="readonly"></td>
              <td><input type="number" name="quantidade14"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\cenoura.jpg" width="40" height="40"></td>
              <form  action = "add-to-cart.php" method = "POST">
              <td><input type="text" name="item15" value="Cenoura" readonly="readonly"></td>
              <td><input type="number" name="preco15" value="3.00" readonly="readonly"></td>
              <td><input type="number" name="quantidade15"></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
          </tbody>
        </table>
</body>
</html>