<?php

session_start();
require("conexao.php");

if (!isset($_SESSION ['authenticated']) && (!isset($_POST['entrar'])) && (!isset($_POST['cadastrar']))) 
{
  echo ("<script>
        window.alert('você não esta logado!')
        window.location.href='login.php';
        </script>");
}

if (isset($_POST['entrar']) && !empty($_POST['entrar']))
{
  $email = $_POST['email'];
  $senha = $_POST['senha'];  

  $query_ = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha'"; 
  $result = $conn->query($query_);


  if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
      $_SESSION['cod_cli'] = $row['cod_cli'];
      $_SESSION['authenticated'] = 'YES';
      header('Location:produtos.php');
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
  $cod_cli  = $_SESSION['cod_cli'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];
  $cod_produto = $_POST['cod_produto'];
  $nome = $_POST['nome'];
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
            window.location.href='produtos.php';
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
        window.location.href='produtos.php';
        </script>");
  }
}

if(isset($_POST['excluirItemCarrinho']) && !empty($_POST['excluirItemCarrinho']))
{
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