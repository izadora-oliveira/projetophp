<!DOCTYPE html>
<html lang="pt-BR">
<?php include "header.php" ?>
<body>

  <section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-image: url("imagens/index.png");
      }
      .bg-glass {
        background-color: hsl(30, 100%, 70%) !important;
      }
      .card{
          margin: auto;
          width: 60%;
          padding: 10px;
        }
    </style>

    <div class="container px-4 py-5 px-md-5  my-5">
      <div class="card bg-glass" style="width: 30rem;">
        <div class="card-body px-4 py-5 px-md-5">
        <h1 class="card-title" style="color: hsl(120, 60%, 50%)">Cadastro</h1>
        <form  action = "cadastrar.php" method = "POST">
          <!-- Nome input -->
          <div class="form-outline mb-4">
            <input type="text" name="nome" id="nome" class="form-control" />
            <label class="form-label" for="email">Nome</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="email" class="form-control" />
            <label class="form-label" for="email">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="senha" id="senha" class="form-control" />
            <label class="form-label" for="senha">Senha</label>
          </div>
          <div class="form-outline mb-4">
            <input type="password" name="senha2" id="senha2" class="form-control" />
            <label class="form-label" for="senha2">Repita Senha</label>
          </div>

          <!-- Submit button -->
          <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success btn-block mb-4"></input>
          <button type="button" class="btn btn-warning btn-block mb-4">
          <a href="index.php">Entrar</a>
          </button>

          </form>
        </div>
      </div>
    </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>