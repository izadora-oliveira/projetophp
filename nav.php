<nav class="navbar navbar-expand-lg bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Feira Delivery</font></font></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="carrinho.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carrinho</font></font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="produtos.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos</font></font></a>
                </li>
                <form action="controller.php" method="POST">
                  <input class="btn btn-dark" type="submit" name="sair" value="Sair" placeholder="Search" aria-label="Search">
                </form>
            </ul>
        </div>
      </div>
    </nav>