<?php

$nome = '';
$email = '';

?>
<section class="container mt-3">

    <h1>Cadastrar Usuário</h1>

    <form action="/usuarios/cadastrar" method="post">
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>" placeholder="Seu nome. Ex: Joãozim do Beto">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" placeholder="Seu email. Ex: joaozim@email.com">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</section>