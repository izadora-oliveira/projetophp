<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>verduras</title>
</head>
<body>
  <?php
  require_once("autenticar.php");
  require("conexao.php");
  ?>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">verduras</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="javascript:history.back()">voltar</a></li>
        <li><a href="index.php">menu</a></li>
        <li><a href="carrinho.php">carrinho</a></li>
      </ul>
    </div>
  </nav>
  <form  action = "add-to-cart.php" method = "POST">
    <table>
          <thead>
            <tr>
                <th>Item</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><img src="imagensdoprojeto\alho.png" width="40" height="40"></td>
              <td><input type="text" name="item16" value="Alho" readonly></td>
              <td><input type="number" name="preco16" value="1.00" readonly></td>
              <td><input type="number" name="quantidade16"></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\alhoporo.jpg" width="40" height="40"></td>
              <td><input type="text" name="item17" value="Alhoporo" readonly></td>
              <td><input type="number" name="preco17" value="1.50" readonly></td>
              <td><input type="number" name="quantidade17"></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\brocolis.jpg" width="40" height="40"></td>
              <td><input type="text" name="item18" value="Brocolis" readonly></td>
              <td><input type="number" name="preco18" value="4.00" readonly></td>
              <td><input type="number" name="quantidade18"></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\pimentao.jpg" width="40" height="40"></td>
              <td><input type="text" name="item19" value="Pimentão" readonly></td>
              <td><input type="number" name="preco19" value="2.00" readonly></td>
              <td><input type="number" name="quantidade19"></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\cebola.jpg" width="40" height="40"></td>
              <td><input type="text" name="item20" value="Cebola" readonly></td>
              <td><input type="number" name="preco20" value="2.50" readonly></td>
              <td><input type="number" name="quantidade20"></td>
            </tr>
          </tbody>
        </table>
        <input type="submit" value="Adicionar ao carrinho">
    </form>
</body>
</html>