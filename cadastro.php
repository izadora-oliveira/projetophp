<?php include "header.php" ?>
<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">cadastro </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="entrar.php">entrar</a></li>
        </ul>
        </div>
    </nav>
    <form method="POST" action="cadastrar.php" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="nome" class = 'validate' required = "" id="name" type="text" class="validate">
          <label for="name">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" class = 'validate' required = "" type="email" class="validate" placeholder="E-mail">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="senha" class = 'validate' required = "" id="password" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="endereco" class = 'validate' required = "" id="endereço" type="text" class="validate">
          <label for="endereço">endereço</label>
        </div>
      </div>
      <button class="btn btn-primary " role="button" >Cadastrar</button>
    </form>
</body>
</html>