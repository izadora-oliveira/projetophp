<?php
session_start();
require("conexao.php");

if(isset($_POST) && !empty($_POST))
{  
    foreach( $_POST as $nome_campo => $valor)
    { 
       $comando = "$" . $nome_campo . "='" . $valor . "';"; 
       eval($comando); 
    }
}

if (!isset($_SESSION ['authenticated']) && (!isset($entrar)) && (!isset($cadastrar)) )  {
  echo ("<script>
  window.alert('você não esta logado!')
  window.location.href='index.php';
</script>");
}

if (isset($entrar) && !empty($entrar))
{
  $query_ = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha'"; 
  $result = $conn->query($query_);


  if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['authenticated'] = 'YES';
      header('Location:folhagens.php');
    }
    
  }else{
    $_SESSION['autenticado'] = 'N';
    echo ("<script>
      window.alert('Usuário ou senha incorretos!')
      window.location.href='index.php';
      </script>");
  }
  $conn->close();
}

if (isset($cadastrar)&& !empty($cadastrar))
{
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
    window.location.href='index.php';
    </script>");
  }
}

if(isset($addcarrinho) && !empty($addcarrinho))
{
  $cod_cli  = $_SESSION['id'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];
  $subtotal = $quantidade*$preco;

  $stmt = $conn->prepare("INSERT INTO tbl_carrinho (cod_cli,cod_produto,nome,preco,qtd,subtotal) VALUES (?,?,?,?,?,?)");
  $stmt->bind_param('iisdid',$cod_cli,$cod,$nome,$preco,$quantidade,$subtotal);
  $stmt->execute();
  $conn->close();

  echo ("<script>
      window.alert('Cadastro realizado com Sucesso!')
      window.location.href='folhagens.php';
	    </script>");
}

if(isset($excluirItemCarrinho) && !empty($excluirItemCarrinho))
{
  $cod_produto  = $_POST["cod_produto"];

  $query_ = "DELETE FROM `tbl_carrinho` WHERE `cod_produto` = $cod_produto";
  $result = $conn->query($query_);

  echo ("<script>
      window.alert('item Excluido!')
      window.location.href='carrinho.php';
      </script>");
}

if(isset($sair) && !empty($sair))
{
  session_start();
  session_destroy();
  header('Location:index.php');
}