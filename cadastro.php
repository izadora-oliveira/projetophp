<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>cadastro</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">cadastro </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="entrar.php">entrar</a></li>
        </ul>
        </div>
    </nav>
    <form method="POST" action="cadastrar.php" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="nome" id="name" type="text" class="validate">
          <label for="name">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="senha" id="password" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="endereco" id="endereço" type="text" class="validate">
          <label for="endereço">endereço</label>
        </div>
      </div>
      <button class="btn btn-primary" role="button">Cadastrar</button>
    </form>
</body>
</html>