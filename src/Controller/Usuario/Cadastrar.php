<?php

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;

if (isset($nome) && isset($email)) {
    $database = require "../src/conexao.php";

    // $database->query("INSERT INTO tb_usuario (nome, email) VALUES ('{$nome}', '{$email}')");

    $sql = "INSERT INTO tb_usuario (nome, email) VALUES (?,?)";
    $stmt= $database->prepare($sql);
    $stmt->execute([$nome, $email]);
}

header('location: /usuarios/listar');
exit;
?>