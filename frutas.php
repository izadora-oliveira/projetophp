<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <form  action = "carrinho.php" method = "GET">
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
              <td>Banana</td>
              <td>$3.00</td>
              <td><input name="banana" type="int"><button>Comprar</button></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\laranja.jpg" width="40" height="40"></td>
              <td>Laranja</td>
              <td>$0.50</td>
              <td><input name="laranja" type="int"><button>Comprar</button></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\manga.jpg" width="40" height="40"></td>
              <td>Maçan</td>
              <td>$2.00</td>
              <td><input name="macan" type="int"><button>Comprar</button></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\morango.jpg" width="40" height="40"></td>
              <td>Morango</td>
              <td>$5.00</td>
              <td><input name="morango" type="int"><button>Comprar</button></td>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\goiaba.jpg" width="40" height="40"></td>
              <td>Goiaba</td>
              <td>$1.00</td>
              <td><input name="goiaba" type="int"><button>Comprar</button></td>
            </tr>
          </tbody>
        </table>
    </form>
</body>
</html>