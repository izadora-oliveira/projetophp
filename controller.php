<?php
require("conexao.php");

if (isset($_POST['entrar']) && !empty($_POST['entrar']))
{
  session_start();
  $email = $_POST['email'];
  $senha = $_POST['senha'];  

  $query_ = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha'"; 
  $result = $conn->query($query_);


  if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
      $_SESSION['cod_cli'] = $row['cod_cli'];
      $_SESSION['nome'] = $row['nome'];
      $_SESSION['authenticated'] = 'YES';
      header('Location:setores.php');
    }
    
  }else{
    $_SESSION['autenticado'] = 'N';
    echo ("<script>
      window.alert('Usuário ou senha incorretos!')
      window.location.href='login.php';
      </script>");
  }
  $conn->close();
}

if (isset($_POST['cadastrar'])&& !empty($_POST['cadastrar']))
{
  session_start();
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $senha2 = $_POST['senha2'];

  if($senha != $senha2){ 
    echo ("<script>
    window.alert('Senhas diferentes !')
    window.location.href='cadastro.php';
    </script>");
  }
  
  $query_ = "SELECT * FROM usuario WHERE email ='$email'";
  $result = $conn->query($query_);
  $registeredEmail = false;
  
  if ($result->num_rows > 0) 
  {
    while ($row = $result->fetch_assoc()) 
    {
      echo $row['email'];
      echo "Email já cadastrado";
      $registeredEmail = false;
      header('Location:cadastro.php');
    }
  } 
  else 
  {
    $stmt = $conn->prepare("INSERT INTO usuario (email,nome,senha) VALUES (?,?,?)");
    $stmt->bind_param("ssi",$email,$nome,$senha);
    $stmt->execute();
    $conn->close();
    
    echo ("<script>
    window.alert('Cadastrado com Sucesso !')
    window.location.href='login.php';
    </script>");
  }
}

if(isset($_POST['addcarrinho']) && !empty($_POST['addcarrinho']))
{
  session_start();
  $cod_cli  = $_SESSION['cod_cli'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];
  $cod_produto = $_POST['cod_produto'];
  $nome = $_POST['nome'];
  $setor = $_POST['setor'];
  $subtotal = $quantidade * $preco;

  $query_ = "SELECT quantidade,subtotal FROM tbl_carrinho where cod_produto = $cod_produto";
  $result = $conn->query($query_);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $quantidade += $row['quantidade'];
    $subtotal += $row['subtotal'];

    $stmt = $conn->prepare("UPDATE `tbl_carrinho` SET `quantidade`='$quantidade',`subtotal`='$subtotal' WHERE cod_produto = $cod_produto");
    $stmt->execute();
    $conn->close();

    echo ("<script>
            window.alert('Adicionado com Sucesso!')
            window.location.href='setor.php?setor=$setor';
            </script>");
  }
  else
  {

    $stmt = $conn->prepare("INSERT INTO tbl_carrinho (cod_cli,cod_produto,nome,preco,quantidade,subtotal) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param('iisdid',$cod_cli,$cod_produto,$nome,$preco,$quantidade,$subtotal);
    $stmt->execute();
    $conn->close();

    echo ("<script>
        window.alert('Adicionado com Sucesso!')
        window.location.href='setor.php?setor=$setor';
        </script>");
  }
}

if(isset($_POST['excluirItemCarrinho']) && !empty($_POST['excluirItemCarrinho']))
{
  session_start();
  $cod_produto  = $_POST["cod_produto"];

  $query_ = "DELETE FROM `tbl_carrinho` WHERE `cod_produto` = $cod_produto";
  $result = $conn->query($query_);

  echo ("<script>
      window.alert('item Excluido!')
      window.location.href='carrinho.php';
      </script>");
}

if(isset($_POST['sair']) && !empty($_POST['sair']))
{
  session_start();
  session_destroy();
  header('Location:login.php');
}

if(isset($_POST['finalizar_pedido']) && !empty($_POST['finalizar_pedido']))
{
  include_once("manager.php");
  session_start();

  $cod_cli = $_SESSION['cod_cli'];
  $cep = $_POST['cep'];
  $numero = $_POST['numero'];
  $rua = $_POST['rua'];
  $bairro = $_POST['bairro'];
  $celular = $_POST['celular'];
  $forma_pagamento = $_POST['forma_pagamento'];
  $dthr_cadastro = date('Y-m-d  h:i:s');
  
    
  $stmt = $conn->prepare("INSERT INTO meus_pedidos (cod_cli,cep,numero,rua,bairro,celular,forma_pagamento,dthr_cadastro) VALUES (?,?,?,?,?,?,?,?)");
  $stmt->bind_param("isisssss",$cod_cli,$cep,$numero,$rua,$bairro,$celular,$forma_pagamento,$dthr_cadastro);
  $stmt->execute();

  $query_ = "SELECT cod_pedido FROM meus_pedidos WHERE cod_cli ='$cod_cli' AND dthr_cadastro = '$dthr_cadastro'"; 
  $result = $conn->query($query_);

  if ($result->num_rows > 0)
  {    
    $row = $result->fetch_assoc();
    $cod_pedido = $row['cod_pedido'];
  }  

  $total = 0;
  $itenscarrinho = getCarrinho();
  foreach ($itenscarrinho as $item)
  {
    $total += $item['subtotal'];

    $stmt = $conn->prepare("INSERT INTO itens_pedido (cod_pedido,cod_produto,nome,preco,quantidade,subtotal) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("iisdid",$cod_pedido,$item['cod_produto'],$item['nome'],$item['preco'],$item['quantidade'],$item['subtotal']);
    $stmt->execute();

    $query_ = "DELETE FROM `tbl_carrinho` WHERE `cod_produto` = $item[cod_produto] ";
    $result = $conn->query($query_);
  }

  $stmt = $conn->prepare("UPDATE `meus_pedidos` SET `total`='$total' WHERE cod_pedido = $cod_pedido");
  $stmt->execute();
  $conn->close();

  echo ("<script>
          window.alert('Pedido cadastrado com Sucesso!')
          window.location.href='meusPedidos.php';
      </script>");
}