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

if (isset($entrar) && !empty($entrar))
{
  $query_ = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha'"; 
  $result = $conn->query($query_);


  if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['authenticated'] = 'YES';
      header('Location:setores.php');
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