<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idproduto'])) {
    include '../conexao.php';
    $idproduto = $_POST['idproduto'];

    $sql = "DELETE FROM produto WHERE idproduto = '$idproduto'";

    if (mysqli_query($conexao, $sql)) {
        header("Location: produto.php");
        exit();
    } else {
        echo "Erro ao excluir o produto: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
} else {
    echo "ID do produto não fornecido";
}
?>
