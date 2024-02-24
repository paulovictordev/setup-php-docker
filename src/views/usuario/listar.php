<section class="container mt-3">
    <h2>Listar Usuário</h2>
    <hr>
    
    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $database = require "../src/conexao.php";
                $result = $database->query("SELECT * FROM tb_usuario");
            ?>

            <?php foreach($result->fetchAll() as $aluno): ?>
                <tr>
                    <td><?= $aluno['id'] ?></td>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['email'] ?></td>
                    <td>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <a href="#" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</section>