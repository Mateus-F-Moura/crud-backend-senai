<?php

include './conn.php';

$email = $_POST['email'] ?? '';
$nome = $_POST['nome'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$cep = $_POST['cep'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$numero = $_POST['numero'];
$complemento = $_POST['complemento'] ?? '';
$bairro = $_POST['bairro'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';

$sql = "INSERT INTO `cliente`(`id`, `email`, `nome`, `dataNascimento`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`) 
VALUES (NULL,'$email','$nome','$data_nascimento','$cep','$endereco','$numero','$complemento','$bairro','$cidade','$estado')";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    error_log("Erro na preparação da consulta: " . $conn->error);
    die("Erro interno ao processar o cadastro. Tente novamente mais tarde.");
}

$stmt->bind_param("ssssssssss", $email, $nome, $data_nascimento, $cep, $endereco, $numero, $complemento, $bairro, $cidade, $estado);

$result = $stmt->execute();

if ($result) {
    header("Location: lista.php?status=success");
    exit();
} else {
    error_log("Erro na execução da consulta: " . $stmt->error);
    header("Location: login.php?status=error&message=Erro ao cadastrar. Tente novamente.");
    exit();
}
?>