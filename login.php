<?php
session_start();
header('Access-Control-Allow-Origin: *');
require("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
$query_ = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha'"; 
$result = $conn->query($query_);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['authenticated'] = 'YES';
    
    header('Location:index.php');
  }
}else{
  $_SESSION['autenticado'] = 'N';
  echo ("<script>
    window.alert('Usuário ou senha incorretos!')
    window.location.href='entrar.php?login=erro1';
    </script>");
}
$conn->close();