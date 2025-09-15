<?php
include './conn.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Lista de Cadastros</title>
</head>

<body>
    <main class="container mt-4">
        <h1 class="text-center mb-5 align-middle">Lista de Cadastros<i class="bi bi-card-checklist ms-2 align-middle"></i></h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Matrícula</th>
                        <th>Email</th>
                        <th>Nome Completo</th>
                        <th>Data de Nascimento</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>UF</th>
                        <th>Número</th>
                        <th>Complemento</th>
                        <th>Funcionalidades</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>exemplo@email.com</td>
                        <td>Nome Exemplo</td>
                        <td>01/01/2000</td>
                        <td>12345-678</td>
                        <td>Rua Exemplo</td>
                        <td>Cidade Exemplo</td>
                        <td>Bairro Exemplo</td>
                        <td>UF</td>
                        <td>123</td>
                        <td>Apto 101</td>
                        <td>
                            <button class="btn btn-warning btn-sm" title="Editar">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                            <button class="btn btn-danger btn-sm" title="Excluir">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-secondary" onclick="history.back()">Voltar</button>
        </div>
    </main>
</body>

</html>