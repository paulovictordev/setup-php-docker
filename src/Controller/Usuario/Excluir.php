<?php

$id = $_GET['id'] ?? null;

if (isset($id)) {
    $database = require "../src/conexao.php";

    $database->query("DELETE FROM tb_usuario WHERE id = '{$id}' ");

    // $sql = "DELETE FROM tb_usuario WHERE id = ?";
    // $stmt= $database->prepare($sql);
    // $stmt->execute([$id]);
}

header('location: /usuarios/listar');
exit;
?>