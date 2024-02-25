<?php

$id = $_POST['id'] ?? null;
$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;

if (isset($id)) {
    $database = require "../src/conexao.php";

    $database->query("UPDATE tb_usuario SET nome = '{$nome}', email = '{$email}' WHERE id = '{$id}'");

    // $sql = "UPDATE tb_usuario SET nome = ?, email = ? WHERE id = ?";
    // $stmt= $database->prepare($sql);
    // $stmt->execute([$nome, $email, $id]);
}

header('location: /usuarios/listar');
exit;
?>