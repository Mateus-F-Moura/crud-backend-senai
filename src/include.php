<?php

include './conn.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO `cliente`(`id`, `email`, `nome`, `dataNascimento`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`) 
VALUES (NULL,'$email','$nome','$data_nascimento','$cep','$endereco','$numero','$complemento','$bairro','$cidade','$estado')";

$result = mysqli_query($conn, $sql);