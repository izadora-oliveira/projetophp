<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

header('Access-Control-Allow-Origin: *');
require("conexao.php");
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