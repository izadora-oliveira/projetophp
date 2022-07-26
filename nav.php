<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Feira Delivery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="produtos.php">Todos Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="meus_pedidos.php">Meus Pedidos</a>
                </li>
                <li class="nav-item">
                    <form action="controller.php" method="POST">
                    <input class="dropdown-item" type="submit" name="sair" value="Sair">
                  </form>
                </li>
            </ul>

            <a class="btn btn-outline-dark" href="carrinho.php" role="button"><i class="bi-cart-fill me-1"></i>Carrinho</a>                
        </div>
    </div>
</nav>