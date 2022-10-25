<?php
require_once("controller.php");
require('manager.php');
require("validarAcesso.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php 
include("header.php");
?>
<body>
  <?php include("nav.php"); ?>

    <div class="container px-4 px-lg-0 mt-5">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="card border-success">
                    <div class="card-body">
                        <form action="controller.php" method="POST" class="row g-3" >
                            <div class="col-6">
                                <label for="cep" class="form-label">Cep</label>
                                <input type="text" class="form-control" name="cep" id="cep" required pattern="\d{8}" placeholder="ex: 12345 123" />
                            </div>
                            <div class="col-6">
                                <label for="numero" class="form-label">Nº</label>
                                <input type="number" name="numero" id="numero" class="form-control" required />
                            </div>
                            <div class="col-6">
                                <label for="rua" class="form-label">Rua</label>
                                <input type="text" name="rua" id="rua" class="form-control" required >
                            </div>
                            <div class="col-6">
                                <label for="bairro" class="form-label">Bairro</label>
                                <input type="text" name="bairro" id="bairro" class="form-control" required />
                            </div>
                            <div class="col-6">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="text" type="tel" name="celular" id="celular" class="form-control" id="celular" required pattern="\d{11}" placeholder="ex: 12 12345 1234" />
                            </div>
                            <div class="col-6">
                                <label for="inputState" class="form-label">Forma de Pagamento</label>
                                <select name="forma_pagamento" id="inputState" class="form-select" required>
                                <option></option>
                                <option>Cartão de crédito</option>
                                <option>Cartão de débito</option>
                                <option>Dinheiro</option>
                                </select>
                            </div>
                            <input type="submit" name="finalizar_pedido" value="Enviar Pedido" class="btn btn-success"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>