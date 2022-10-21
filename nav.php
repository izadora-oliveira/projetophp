<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Feira Delivery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="setores.php">Setores</a>
                </li>
                <?php 
                include_once("manager.php");
                foreach($setores as $setor){ ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="setor.php?setor=<?= $setor ?>"><?= $setor ?></a>
                </li>
                <?php } ?>                
                
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-list-dropdown"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="meusPedidos.php">Meus Pedidos</a>
                </li>
           </ul>
            <div class="me-4">
                <a class="btn btn-outline-success" href="carrinho.php" role="button"><i class="bi-cart-fill me-1"></i>Carrinho</a>
            </div>
            <div class="me-4">
                <form action="controller.php" method="POST">
                <input class="btn btn-outline-danger" type="submit" name="sair" value="Sair">
                </form>
            </div>
        </div>
    </div>
</nav>