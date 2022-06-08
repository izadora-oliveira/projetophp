<?php
require("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];

$query_ = "SELECT * FROM usuario WHERE email ='$email'";
$result = $conn->query($query_);
$registeredEmail = false;

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo $row['email'];
    echo "Email já cadastrado";
    $registeredEmail = false;
    //header('Location:cadastro.php?login=equal');
  }
} else {
  echo "Email nao tá cadastrado";
    $registeredEmail = true;
}

if ($registeredEmail) {
  $stmt = $conn->prepare("INSERT INTO usuario (email,nome,senha,endereco) VALUES (?,?,?,?)");
  $stmt->bind_param("ssis",$email,$nome,$senha,$endereco);
  $stmt->execute();
  $conn->close();
  header('Location:entrar.php');
}