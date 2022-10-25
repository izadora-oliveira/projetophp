<?php
    if(isset($_POST['post_carrinho']) && !empty($_POST['post_carrinho'])){
        session_start();
        if(isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == 'YES'){
            header('Location:infoPedido.php');
        }else{
            $_SESSION['post_carrinho'] = $_POST['post_carrinho'];
        }
    }
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--author:starttemplate-->
<!--reference site : starttemplate.com-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Feira Delivery</title>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">
            <form action="controller.php" method="POST">
              <div class="form-login"></br>
                <h4>Entrar</h4>
                </br>
                <input type="email" name="email" id="email" class="form-control input-sm chat-input" placeholder="Email" required="require"/>
                </br></br>
                <input type="password" name="senha" id="senha" class="form-control input-sm chat-input" placeholder="Senha" required="require"/>
                </br></br>
                <div class="wrapper">
                    <input type="submit" name="entrar" value="Entrar" class="btn btn-success"/>
                    <a href="cadastro.php" class="btn btn-success" role="button">Cadastre-se</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
