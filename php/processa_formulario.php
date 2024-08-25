<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    $mensagem = $_POST['mensage'];

    // Inserir nome
    $sql = "INSERT INTO nomes (nome) VALUES (:nome)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();

    // Inserir email
    $sql = "INSERT INTO emails (email) VALUES (:email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Inserir telefone
    $sql = "INSERT INTO telefones (telefone) VALUES (:telefone)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->execute();

    // Inserir mensagem
    $sql = "INSERT INTO mensagens (mensagem) VALUES (:mensagem)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':mensagem', $mensagem);
    $stmt->execute();

    header('Location: index.html');
}
?>
