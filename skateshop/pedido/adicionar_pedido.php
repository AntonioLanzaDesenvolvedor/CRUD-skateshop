<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Adicionar Pedido</h1>

        <form action="processar_pedido.php" method="POST">
            <div class="mb-3">
                <label for="data" class="form-label">Data:</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <div class="mb-3">
                <label for="fk_idcliente" class="form-label">ID do Cliente:</label>
                <select class="form-select" id="fk_idcliente" name="fk_idcliente" required>
                    <option value="">Selecione um cliente</option>
                    <?php
                    include '../conexao.php';
                    $sql_clientes = "SELECT idcliente, nome FROM cliente";
                    $resultado_clientes = mysqli_query($conexao, $sql_clientes);
                    while ($row_cliente = mysqli_fetch_assoc($resultado_clientes)) {
                        echo "<option value='" . $row_cliente['idcliente'] . "'>" . $row_cliente['nome'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="fk_idfuncionario" class="form-label">ID do Funcionário:</label>
                <select class="form-select" id="fk_idfuncionario" name="fk_idfuncionario" required>
                    <option value="">Selecione um funcionário</option>
                    <?php
                    $sql_funcionarios = "SELECT idfuncionario, nome FROM funcionario";
                    $resultado_funcionarios = mysqli_query($conexao, $sql_funcionarios);
                    while ($row_funcionario = mysqli_fetch_assoc($resultado_funcionarios)) {
                        echo "<option value='" . $row_funcionario['idfuncionario'] . "'>" . $row_funcionario['nome'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Pedido</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
