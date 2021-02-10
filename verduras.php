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
  require_once("autenticar.php")
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
            <td>Alho</td>
            <td>$1.00</td>
            <td><input name="produto" type="int"><button>Comprar</button></td>
          </tr>
          <tr>
            <td><img src="imagensdoprojeto\alhoporo.jpg" width="40" height="40"></td>
            <td>Alho poró</td>
            <td>$1.50</td>
            <td><input name="produto" type="int"><button>Comprar</button></td>
          </tr>
          <tr>
            <td><img src="imagensdoprojeto\brocolis.jpg" width="40" height="40"></td>
            <td>Brocolis</td>
            <td>$4.00</td>
            <td><input name="produto" type="int"><button>Comprar</button></td>
          </tr>
          <tr>
            <td><img src="imagensdoprojeto\pimentao.jpg" width="40" height="40"></td>
            <td>Pimentao</td>
            <td>$2.00</td>
            <td><input name="produto" type="int"><button>Comprar</button></td>
          </tr>
          <tr>
            <td><img src="imagensdoprojeto\cebola.jpg" width="40" height="40"></td>
            <td>Cebola</td>
            <td>$2.50</td>
            <td><input name="produto" type="int"><button>Comprar</button></td>
          </tr>
        </tbody>
      </table>
</body>
</html>