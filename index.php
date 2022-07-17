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
          backdrop-filter: saturate(200%) blur(25px);
        }
      </style>

      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-center mb-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(120, 60%, 50%)">
              Feira Delivery
            </h1>
          </div>
            <div class="card bg-glass" style="width: 30rem;">
              <div class="card-body px-4 py-5 px-md-5">
              <form  action = "login.php" method = "POST">
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
                  <button type="submit" class="btn btn-success btn-block mb-4">
                    Entrar
                  </button>                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>