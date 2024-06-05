<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['idproduto']) && isset($_POST['descricao']) && isset($_POST['preco']) && isset($_POST['marca']) && isset($_POST['quantidade'])) {
        $idproduto = $_POST['idproduto'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $marca = $_POST['marca'];
        $quantidade = $_POST['quantidade'];


        $sql = "UPDATE produto SET descricao='$descricao', preco='$preco', marca='$marca', quantidade='$quantidade' WHERE idproduto='$idproduto'";
        if (mysqli_query($conexao, $sql)) {
            header("Location: produto.php");
            exit();
        } else {
            echo "Erro ao atualizar o produto: " . mysqli_error($conexao);
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de requisição inválido.";
}

mysqli_close($conexao);
?>
