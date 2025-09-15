<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Cadastro</title>
</head>

<body>
    <main class="container mt-4">
        <div class="text-center">
            <h1 class="title d-inline align-middle">Cadastro</h1>
            <i class="bi bi-stars h1 align-middle ms-2"></i>
        </div>
        <form action="include.php" method="post">
            <div class="form-floating mb-3 mt-4">
                <input name="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com">
                <label for="floatingInput"><i class="bi bi-envelope me-2"></i>Email</label>
            </div>
            <div class="form-floating mb-3">
                <input name="nome" type="text" class="form-control" id="floatingInputGroup1" placeholder="Nome">
                <label for="floatingInputGroup1"><i class="bi bi-person me-2"></i>Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input name="data_nascimento" type="date" class="form-control" id="birthDate"
                    placeholder="Data de Nascimento">
                <label for="birthDate"><i class="bi bi-calendar me-2"></i>Data de Nascimento</label>
            </div>
            <div class="form-floating mb-3">
                <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP" maxlength="8">
                <label for="cep"><i class="bi bi-geo-alt me-2"></i>CEP</label>
            </div>
            <div class="form-floating mb-3">
                <input name="endereco" type="text" class="form-control" id="address" placeholder="Endereço">
                <label for="address"><i class="bi bi-house me-2"></i>Endereço</label>
            </div>
            <div class="row g-2">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input name="numero" type="text" class="form-control" id="number" placeholder="Número">
                        <label for="number">Número</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input name="complemento" type="text" class="form-control" id="complement"
                            placeholder="Complemento">
                        <label for="complement">Complemento</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input name="bairro" type="text" class="form-control" id="neighborhood" placeholder="Bairro">
                <label for="neighborhood">Bairro</label>
            </div>
            <div class="row g-2">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input name="cidade" type="text" class="form-control" id="city" placeholder="Cidade">
                        <label for="city">Cidade</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input name="estado" type="text" class="form-control" id="state" placeholder="Estado"
                            maxlength="2">
                        <label for="state">Estado</label>
                    </div>
                </div>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="termsCheck">
                <label class="form-check-label" for="termsCheck">
                    Aceito os <a href="./terms.php">termos de uso</a>
                </label>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-secondary me-md-2" type="button" onclick="history.back()">Voltar</button>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </main>
</body>

</html>