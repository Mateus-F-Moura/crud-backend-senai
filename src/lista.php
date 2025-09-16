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
                    <?php

                    $sql = 'SELECT id, email, nome, dataNascimento, cep, endereco, numero, complemento, bairro, cidade, estado FROM cliente';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Itera sobre cada linha de resultado
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                            echo "<td>" . htmlspecialchars(date('d/m/Y', strtotime($row['dataNascimento']))) . "</td>"; // Formata a data
                            echo "<td>" . htmlspecialchars($row['cep']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['endereco']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['numero']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['complemento']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['bairro']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['cidade']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['estado']) . "</td>";
                            echo "<td>";
                            echo "<button class='btn btn-warning btn-sm me-1' title='Editar'>"; // Adicionado margem
                            echo "<i class='bi bi-pencil-fill'></i>";
                            echo "</button>";
                            echo "<button class='btn btn-danger btn-sm' title='Excluir'>";
                            echo "<i class='bi bi-trash-fill'></i>";
                            echo "</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='12' class='text-center'>Nenhum cadastro encontrado.</td></tr>";
                    }
                    // Fechar a conexão (opcional, mas boa prática)
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-secondary"><a href="index.php">Voltar</a></button>
        </div>
    </main>
</body>

</html>