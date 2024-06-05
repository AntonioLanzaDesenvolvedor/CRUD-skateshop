<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idfuncionario = $_POST['idfuncionario'];

    $sql = "SELECT * FROM funcionario WHERE idfuncionario = $idfuncionario";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);
        $nome = $row['nome'];
        $cargo = $row['cargo'];
    } else {
        echo "<script>alert('Funcionário não encontrado.');</script>";
        echo "<script>window.location = 'funcionario.php';</script>";
        exit(); 
    }
} else {
    echo "<script>alert('Método não permitido.');</script>";
    echo "<script>window.location = 'funcionario.php';</script>";
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Funcionário</h1>
        
        <form action="atualizar_funcionario.php" method="POST">
            <input type="hidden" name="idfuncionario" value="<?php echo $idfuncionario; ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo:</label>
                <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $cargo; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Funcionário</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
