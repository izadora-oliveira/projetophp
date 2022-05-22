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
    <div class="card text-center" style="width: 25rem;">
      <div class="card-body">
        <h5 class="card-title">Entrar</h5>
      </div>
      <form  action = "login.php" method = "POST">
        <div class="form-group">
          <input name="email" class = 'validate' required = "" type="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="form-group">
          <input name="senha" class = 'validate' required = "" type="password" class="form-control" placeholder="Senha">
        </div>
        <div class="card-body">
        <button type="submit" class="card-link">Entrar</button>
        <a href="cadastro.php" class="card-link">Cadastrar</a>
        </div>
      </form> 
    </div>
  </body>
</html> 