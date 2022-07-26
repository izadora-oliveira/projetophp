<?php include("controller.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php include("header.php") ?>
<body>
<?php include("nav.php") ?> 
    
   <container class="container text-center" >
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Detalhes
            </a>
        </div>
    </div>
    <div class="collapse" id="collapseExample">
        <div class="card"  style="width: 36rem;">
            <div class="card-body">
                <div class="col-12">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco">
                </div>
                <div class="col-12">
                <label for="inputState" class="form-label">Forma de Pagamento</label>
                <select id="inputState" class="form-select">
                    <option></option>
                    <option>Cartão de crédito</option>
                    <option>Cartão de débito</option>
                    <option>Dinheiro</option>
                </select>
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-success">Finalizar Pedido</button>
                </div>
            </div>
        </div>
    </div>

   </container>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>