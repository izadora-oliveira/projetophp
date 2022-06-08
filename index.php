<!DOCTYPE html>
<html lang="pt-br">
  <?php include("header.php") ?>
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