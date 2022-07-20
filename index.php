<!DOCTYPE html>
<html lang="pt-br">
  <?php include("header.php") ?>
  <body>
  <!-- Section: Design Block -->
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
          border: 3px solid #73AD21;
          padding: 10px;
        }
      </style>

      <div class="container px-4 py-5 px-md-5  my-5">
        <div class="card bg-glass" style="width: 30rem;">
          <div class="card-body px-4 py-5 px-md-5">
          <h1 class="card-title" style="color: hsl(120, 60%, 50%)">Feira Delivery</h1>
          <form  action = "controller.php" method = "POST">
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

              <!-- Submit button -->
              <input type="submit" name="entrar" value="Entrar" class="btn btn-success btn-block mb-4"></input>
              <button type="button" class="btn btn-warning btn-block mb-4">
              <a href="cadastro.php">Cadastrar</a>
              </button>

            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>