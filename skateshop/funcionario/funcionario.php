<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Funcionários</title>
    <!-- Incluindo Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Gerenciar Funcionários</h1>
        
        <!-- Formulário para adicionar novo funcionário -->
        <form action="adicionar_funcionario.php" method="POST">
            <div class="mb-3">
                <label for="idfuncionario" class="form-label">ID do Funcionário:</label>
                <input type="number" class="form-control" id="idfuncionario" name="idfuncionario" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo:</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Funcionário</button>
            <a href="../index.html" class="btn btn-secondary">Voltar para a página inicial</a>
        </form>

        <hr>

        <!-- Tabela para exibir funcionários -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'listar_funcionarios.php'; ?>
            </tbody>
        </table>
    </div>

    <!-- Incluindo Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
