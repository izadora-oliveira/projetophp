<?php
  require_once("autenticar.php");
  require("conexao.php");
  include "header.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
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
              <form action="cadastrando_produto.php" method="POST">
              <td><input type="text" name="item" value="Banana" readonly="readonly" /></td>
              <td><input type="number" name="preco" value=3.00 readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho" /></td>
            </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\laranja.jpg" width="40" height="40"></td>
              <form action="cadastrando_produto.php" method="POST">
              <td><input type="text" name="item" value="Laranja" readonly="readonly" /></td>
              <td><input type="number" name="preco" value=0.50 readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho" /></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\manga.jpg" width="40" height="40"></td>
              <form action="cadastrando_produto.php" method="POST">
              <td><input type="text" name="item" value="Marçan" readonly="readonly" /></td>
              <td><input type="number" name="preco" value=2.00 readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho"></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\morango.jpg" width="40" height="40"></td>
              <form action="cadastrando_produto.php" method="POST">
              <td><input type="text" name="item" value="Morango" readonly="readonly" /></td>
              <td><input type="number" name="preco" value="5.00" readonly="readonly" /></td>
              <td><input type="number" name="quantidade" /></td>
              <td><input type="submit" value="Adicionar ao carrinho" /></td>
              </form>
            </tr>
            <tr>
              <td><img src="imagensdoprojeto\goiaba.jpg" width="40" height="40"></td>
              <form action="cadastrando_produto.php" method="POST">
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