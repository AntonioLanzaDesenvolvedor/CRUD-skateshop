<?php
include '../conexao.php';
$idproduto = rand(100000, 999999);

$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$marca = $_POST['marca'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO produto (idproduto, descricao, preco, marca, quantidade) 
        VALUES ('$idproduto', '$descricao', '$preco', '$marca', '$quantidade')";

if (mysqli_query($conexao, $sql)) {
    header("Location: produto.php");
    exit();
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
