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
            <td><img src="imagensdoprojeto\acelgachinesa.jpg" width="40" height="40"></td>
            <td>Acelga chinesa</td>
            <td>$2.00</td>
            <td><input name="acelgachinesa" type="int"><button>Comprar</button></td>
          </tr>
          <tr>
            <td><img src="imagensdoprojeto\alface.png" width="40" height="40"></td>
            <td>Alface</td>
            <td>$2.50</td>
            <td><input name="alface" type="int"><button>Comprar</button></td>
          </tr>
          <tr>
            <td><img src="imagensdoprojeto\coentro.jpg" width="40" height="40"></td>
            <td>Coentro</td>
            <td>$1.50</td>
            <td><input name="coentro" type="int"><button>Comprar</button></td>
          </tr>
          <tr>
            <td><img src="imagensdoprojeto\rucula.png" width="40" height="40"></td>
            <td>Rúcula</td>
            <td>$2.00</td>
            <td><input name="rucula" type="int"><button>Comprar</button></td>
          </tr>
          <tr>
            <td><img src="imagensdoprojeto\cebolinha.jpg" width="40" height="40"></td>
            <td>Cebolinha</td>
            <td>$1.50</td>
            <td><input name="cebolinha" type="int"><button>Comprar</button></td>
          </tr>
        </tbody>
      </table>
</body>
</html>