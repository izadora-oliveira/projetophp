<?php
require("conexao.php");

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
  window.location.href='index.php';
  </script>");
}
