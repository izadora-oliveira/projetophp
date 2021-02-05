<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Entrar</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">entrar </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="cadastro.php">cadastrar</a></li>
        </ul>
        </div>
    </nav>
    <form  action = "login.php" method = "POST">
      <div class="form-group">
        <input name="email" class = 'validate' required = "" type="email" class="form-control" placeholder="E-mail">
      </div>
      <div class="form-group">
        <input name="senha" class = 'validate' required = "" type="password" class="form-control" placeholder="Senha">
      </div>
      <button type="submit" class="waves-effect waves-light btn-large blue lighten-3">Entrar</button>
    </form>             
     
</body>
</html> 