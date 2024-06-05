<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idcliente = $_POST['idcliente'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];

    $sql = "UPDATE cliente SET nome='$nome', telefone='$telefone', cpf='$cpf' WHERE idcliente=$idcliente";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Cliente atualizado com sucesso!');</script>";
        echo "<script>window.location = 'cliente.php';</script>";
    } else {
        echo "Erro ao atualizar o cliente: " . mysqli_error($conexao);
    }
}
?>
