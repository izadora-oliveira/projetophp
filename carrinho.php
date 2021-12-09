<?php 

include "header.php";
session_start();

?>
<body>
  <nav>
      <div class="nav-wrapper">
        <a class="brand-logo">carrinho </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="javascript:history.back()">Continuar comprando</a></li>
          <li><a href="index.php">Menu</a></li>
          <li><a href="logoff.php">Sair</a></li>
        </ul>
      </div>
    </nav>
    
    <table class = "centered">
      <thead >
        <tr>
            <th>Item</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Subtotal</th>
        </tr>
      </thead>
            <tbody>
            <?php
            require "conexao.php";
             $result = $conn->query("SELECT * FROM pedido WHERE idusuario ='$_SESSION[id]'");
             while ($aux_query = $result->fetch_assoc()) 
             {
                 echo '<tr>';
                 echo '  <td>'.$aux_query["item"].'</td>';
                 echo '  <td>'.$aux_query["preco"].'</td>';
                 echo '  <td>'.$aux_query["quantidade"].'</td>';
                 echo '  <td>'.$aux_query["subtotal"].'</td>';
                 echo '</tr>';
             }
             ?>
            </tbody>
    </table>
  </body>
</html>