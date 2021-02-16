<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>frutas</title>
</head>
<body>
  <?php
  require_once("autenticar.php");
  require("conexao.php");
  ?>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">frutas </a>
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
              <td><img src="imagensdoprojeto\banana.png" width="40" height="40"></td>
              <td><input type="text" name="item1" value="Banana" readonly></td>
              <td><input type="number" name="preco1" value="3.00" readonly></td>
              <td><input type="number" name="quantidade1"></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\laranja.jpg" width="40" height="40"></td>
              <td><input type="text" name="item2" value="Laranja" readonly></td>
              <td><input type="number" name="preco2" value="0.50" readonly></td>
              <td><input type="number" name="quantidade2"></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\manga.jpg" width="40" height="40"></td>
              <td><input type="text" name="item3" value="Marçan" readonly></td>
              <td><input type="number" name="preco3" value="2.00" readonly></td>
              <td><input type="number" name="quantidade3"></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\morango.jpg" width="40" height="40"></td>
              <td><input type="text" name="item4" value="Morango" readonly></td>
              <td><input type="number" name="preco4" value="5.00" readonly></td>
              <td><input type="number" name="quantidade4"></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\goiaba.jpg" width="40" height="40"></td>
              <td><input type="text" name="item4" value="Goiaba" readonly></td>
              <td><input type="number" name="preco5" value="1.00" readonly></td>
              <td><input type="number" name="quantidade5"></td>
            </tr>
          </tbody>
        </table>
        <input type="submit" value="Adicionar ao carrinho">
    </form>
</body>
</html>