<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Feira Delivery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Setores</a>
                </li>                               
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Setores
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php 
                        include_once("manager.php");
                        foreach($setores as $setor)
                        {
                            ?>
                            <a class="dropdown-item" href="setor.php?setor=<?= $setor ?>"><?= $setor ?></a>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="meusPedidos.php">Meus Pedidos</a>
                </li>
           </ul>
            <div class="me-4">
                <a class="btn btn-outline-success" href="carrinho.php" role="button"><i class="bi-cart-fill me-1"></i>Carrinho</a>
            </div>
            <?php
            session_start();
            if(isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === 'YES')
            {
                ?>
                <div class="me-4">
                    <form action="controller.php" method="POST">
                    <input class="btn btn-outline-danger" type="submit" name="sair" value="Sair">
                    </form>
                </div>  
                <?php
            }
            ?>
        </div>
    </div>
</nav>
<script src="https://kit.fontawesome.com/65f22fe718.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
