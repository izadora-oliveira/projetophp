<?php include('produtos_frutas.php'); 
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imagem = "images/icons/frutas/".$row['image_produto'];
            $idProduto ="produto_". $row['id_produto'];
            $btnProduto = $row['id_produto'];
            $nome = $row['nome_produto'];
            $idNome = "nome_". $row['id_produto'];
            $preco = $row['preco_produto'];
            $idPreco = "preco_". $row['id_produto'];
            $tipo = $row['tipo_produto'];
            $idTipo = "tipo_produto_". $row['id_produto'];

            $produto = "<tr> <td><img src=$imagem  width='49.84' height='49' alt=''></td> ";
            $produto .= "<input type='hidden' id=$idNome value=$nome > ";
            $produto .= "<input type='hidden' id=$idPreco value=$preco > ";
            $produto .= " <td> ".$row['nome_produto']." </td> <td>R$ ".$row['preco_produto']." $tipo</td> "; 
            $produto .= "<td><a class='btn btn-outline-primary btn-sm spinnerbutton spinnerMinus spinner-roundbutton  green darken-3' >";
            $produto .= "<input id=$idProduto  class = 'validate' type='number' value='0' min='0' max='100' required type='number'/></a><p>"; 
            $produto .= "</p><button id = $btnProduto onClick = addCarrinho(this)><i class='material-icons center' >add_shopping_cart</i></button></td> </tr>";
            echo $produto;
          }
            }
      ?>