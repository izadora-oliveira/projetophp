<?php
      require("conexao.php");

      $query_ = "SELECT * FROM pedido WHERE idusuario ='$idusuario'"; 
      $result = $conn->query($query_);
      $pedidousuario = array();
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          //echo $row['nome_aluno'] . "|" . $row['senha'] . "|";
          $pedidousuario[] = $row['nome'] . '#' . $row['preco'] . "#" . $row['quantidade'] . "#" . $row['subtotal'] . "#" . $row['total'];
        }
      } else {
      
        //header('Location:home.php?nota=erro1'); //usada para enviar cabeçalho bruto
        echo ("<script>
              window.alert('voçê não tem pedido finalizado.')
              window.location.href='../projetophp/index.php';
          </script>");
      }      
      $conn->close();
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
          <a class="brand-logo">Meus pedidos</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="logoff.php">Sair</a></li>
            <li><a href="index.php">Menu</a></li>
          </ul>
        </div>
      </nav>

      <table>
        <thead>
          <tr>
              <th>nome</th>
              <th>preço</th>
              <th>quantidade</th>
              <th>subtotal</th>
              <th>total</th>
          </tr>
        </thead>

        <tbody>
        <?php $cont = 0;
              foreach ($pedidousuario as $item) {
                $dados_pedido = explode('#', $item);


              }
              ?>
          <tr>

            <?php 
            $a = array();
                    //$cont++;

                    echo "<td name ='nome'class='table'>";
                    echo $dados_pedido[0];
                    echo "</td>";
                    echo "<td name='preco' class='table'>";
                    echo $dados_pedido[1];
                    echo "</td>";

                    echo "<td name='quantidade' class='table'>";
                    echo $dados_pedido[2];
                    echo "</td>";
                    echo "<td name='subtotal' class='table'>";
                    echo $dados_pedido[3];
                    echo "</td>";

                    echo "<td name='total' class='table'>";
                    echo $dados_pedido[4];
                    echo "</td>";

                  ?>
          </tr>
        </tbody>
      </table>
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <p><?php

              session_start();
              header('Access-Control-Allow-Origin: *');
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