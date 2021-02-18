
<?php 
require("conexao.php");
require("finalizando.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <title>Nota fiscal</title>
  </head>
  <body>
      <nav>
        <div class="nav-wrapper">
          <a class="brand-logo">Nota fiscal </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="logoff.php">Sair</a></li>
          </ul>
        </div>
      </nav>
      <?php
      $query_ = "SELECT * FROM pedido WHERE idusuario = '$idusuario'";
      $result = $conn->query($query_);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          
          $idusuario ="produto_". $row['id_produto'];
          $btnProduto = $row['id_produto'];
          $nome = $row['nome_produto'];
          $idNome = "nome_". $row['id_produto'];
          $preco = $row['preco_produto'];
          $idPreco = "preco_". $row['id_produto'];
          $tipo = $row['tipo_produto'];
          $idTipo = "tipo_produto_". $row['id_produto'];
          
      }

            ?>
        <div class="nav-wrapper">
          <a class="brand-logo">Total a pagar</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class=""><?php
            
            
            ?></li>
          </ul>
        </div>
      </nav>
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <p><?php
              session_start();
                if (empty($_SESSION['dadosfinais'])) {
                $_SESSION['dadosfinais'] = [];}
                              
                array_push($_SESSION['dadosfinais'], $_POST);

                  foreach($_SESSION['dadosfinais'] as $produto){
                  $usuario = $produto['usuario'];
                  $endereco = $produto['endereco'];
                  $pagamento = $produto['pagamento'];
                  }
                    echo "Endereço de entrega: </br>";
                    echo $endereco;
                    echo "</br>";
                    echo "Forma de pagamento: </br>";
                    echo $pagamento;
                    echo "</br>";
                  
                  ?>
                </p>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>