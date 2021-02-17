<?php
  require("lancamento.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>carrinho</title>
</head>
<body>
  <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">carrinho </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="javascript:history.back()">voltar</a></li>
          <li><a href="index.php">menu</a></li>
          <li><a href="logoff.php">Sair</a></li>
        </ul>
      </div>
    </nav>
        <?php
          echo '<table border="1">';
          echo '<tr><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>';
  
          foreach($teste as $val) {  
                 foreach($val as $item) {
                     echo "<td>{$item}</td>";
                 }
  
              echo "</td>";
              echo '</tr>';
          }
  
          echo '</table>';
        ?>
      </table>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Total a pagar</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><input type="text" name="total" readonly="readonly" value="" /></li>
        </ul>
      </div>
    </nav>
  </body>
</html>