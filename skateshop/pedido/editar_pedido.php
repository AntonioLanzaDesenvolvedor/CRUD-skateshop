<?php
include '../conexao.php';
if(isset($_GET['idpedido']) && !empty($_GET['idpedido'])) {
    $idpedido = $_GET['idpedido'];

    $sql = "SELECT * FROM pedido WHERE idpedido = '$idpedido'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar Pedido</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container mt-5">
                <h1 class="mb-4">Editar Pedido</h1>
                <form action="atualizar_pedido.php" method="POST">
                    <input type="hidden" name="idpedido" value="<?php echo $row['idpedido']; ?>">
                    <div class="mb-3">
                        <label for="data" class="form-label">Data:</label>
                        <input type="date" class="form-control" id="data" name="data" value="<?php echo $row['data']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $row['status']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar Pedido</button>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
<?php
    } else {
        echo "Pedido não encontrado.";
    }
} else {
    echo "ID do pedido não fornecido.";
}

mysqli_close($conexao);
?>
