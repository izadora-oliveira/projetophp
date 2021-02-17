<?php
  require_once("autenticar.php");
  require("conexao.php");
?>
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
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">frutas </a>
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
                <th></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><img src="imagensdoprojeto\banana.png" width="40" height="40"></td>
              <form action="carrinho.php" method="POST">
              <td><input type="text" name="item" value="Banana" readonly="readonly" /></td>
              <td><input type="number" name="preco" value="3.00" readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho" /></td>
            </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\laranja.jpg" width="40" height="40"></td>
              <form action="carrinho.php" method="POST">
              <td><input type="text" name="item" value="Laranja" readonly="readonly" /></td>
              <td><input type="number" name="preco" value="0.50" readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho" /></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\manga.jpg" width="40" height="40"></td>
              <form action="carrinho.php" method="POST">
              <td><input type="text" name="item" value="Marçan" readonly="readonly" /></td>
              <td><input type="number" name="preco" value="2.00" readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\morango.jpg" width="40" height="40"></td>
              <form action="carrinho.php" method="POST">
              <td><input type="text" name="item" value="Morango" readonly="readonly" /></td>
              <td><input type="number" name="preco" value="5.00" readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho" /></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\goiaba.jpg" width="40" height="40"></td>
              <form action="carrinho.php" method="POST">
              <td><input type="text" name="item" value="Goiaba" readonly="readonly" /></td>
              <td><input type="number" name="preco" value="1.00" readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho" /></td>
              </form>
            </tr>
          </tbody>
        </table>
</body>
</html>