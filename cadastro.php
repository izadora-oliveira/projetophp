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
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">
              <div class="form-login"></br>
                <h4>Cadastro</h4>
                </br>
                <form action="controller.php" method="POST">
                <label for="name">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control input-sm chat-input" placeholder="" require/>
                </br></br>
                <label for="name">Email</label>
                <input type="email" id="email" name="email" class="form-control input-sm chat-input"/>
                </br></br>
                <label for="name">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control input-sm chat-input"/>
                </br></br>
                <label for="name">Repetir Senha</label>
                <input type="password" id="senha2" name="senha2" class="form-control input-sm chat-input"/>
                </br></br>
                <div class="wrapper">
                <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success btn-md">
                <a href="index.php" class="btn btn-success" role="button">Entrar</a>
                </div>
                </form>
            </div>
        </div>
    </div>   
</div>
</body>
</html>