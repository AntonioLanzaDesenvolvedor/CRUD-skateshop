<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    
    $sql_verificar_id = "SELECT idcliente FROM cliente WHERE idcliente = $id";
    $resultado_verificar_id = mysqli_query($conexao, $sql_verificar_id);
    
    if (mysqli_num_rows($resultado_verificar_id) > 0) {
        echo "<script>alert('O ID informado já existe. Por favor, escolha outro ID.');</script>";
        echo "<script>window.location = 'cliente.php';</script>";
    } else {
        $sql = "INSERT INTO cliente (idcliente, nome, telefone, cpf) VALUES ('$id', '$nome', '$telefone', '$cpf')";
        if (mysqli_query($conexao, $sql)) {
            echo "<script>alert('Cliente cadastrado com sucesso!');</script>";
            echo "<script>window.location = 'cliente.php';</script>";
        } else {
            echo "Erro ao cadastrar o cliente: " . mysqli_error($conexao);
        }
    }
}
?>
