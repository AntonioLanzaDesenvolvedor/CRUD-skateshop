<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Gerenciar Pedidos</h1>

        <a href="adicionar_pedido.php" class="btn btn-primary mb-3">Adicionar Pedido</a>
        <a href="../index.html" class="btn btn-secondary mb-3">Voltar para a página inicial</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Status</th>
                    <th>ID do Cliente</th>
                    <th>ID do Funcionário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'listar_pedidos.php'; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
