<?php

$nome = '';
$email = '';

$id = $_GET['id'] ?? null;
if ($id) {
    $database = require "../src/conexao.php";
    $result = $database->query("SELECT * FROM tb_usuario WHERE id = '{$id}'")->fetch();

    $nome = $result['nome'];
    $email = $result['email'];
}

?>
<section class="container mt-3">

    <h1>Atualizar Usuário</h1>

    <form action="/usuarios/atualizar" method="post">
        
        <div class="form-group">
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
        </div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>" placeholder="Seu nome. Ex: Joãozim do Beto">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" placeholder="Seu email. Ex: joaozim@email.com">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</section>