<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <!-- Incluindo Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Produto</h1>
        <?php
        include '../conexao.php';

        // Verifica se o ID do produto foi fornecido via GET
        if(isset($_GET['idproduto'])) {
            $idproduto = $_GET['idproduto'];

            // Seleciona o produto com base no ID fornecido
            $sql = "SELECT * FROM produto WHERE idproduto = '$idproduto'";
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                $produto = mysqli_fetch_assoc($resultado);
        ?>
        <form action="processar_editar_produto.php" method="POST">
            <input type="hidden" name="idproduto" value="<?php echo $produto['idproduto']; ?>">
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $produto['descricao']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input type="text" class="form-control" id="preco" name="preco" value="<?php echo $produto['preco']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $produto['marca']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" value="<?php echo $produto['quantidade']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
        <?php
            } else {
                echo "Produto não encontrado.";
            }
        } else {
            echo "ID do produto não fornecido.";
        }
        mysqli_close($conexao);
        ?>
    </div>
    <!-- Incluindo Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
