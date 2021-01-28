<?php
$usuario_auten = false;

// método POST

echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<br/>';
echo $_POST['email'];
echo '<br/>';
echo $_POST['senha'];

//usuários do sistema
$usuarios = array(
  array('email' => 'adm@teste.com', 'senha' => '123456'),
  array('email' => 'user@teste.com', 'senha' => 'abcdef'),
  array('email' => 'aluna@teste.com', 'senha' => '654321'),
);

foreach ($usuarios as $user) {
  if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    $usuario_auten = true;
  }
}
if ($usuario_auten) {
  echo "Usuário autenticado";
} else {
  //echo "Erro na autenticação do usuário";
  header('Location:entrar.php?login=erro'); //usada para enviar cabeçalho bruto
  //encaminhar a aplicação quando instrução for interpretada
}