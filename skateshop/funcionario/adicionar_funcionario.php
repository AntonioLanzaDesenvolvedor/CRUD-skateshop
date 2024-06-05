<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idfuncionario = $_POST['idfuncionario'];
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];

    $sql_verificar = "SELECT * FROM funcionario WHERE idfuncionario = $idfuncionario";
    $resultado_verificar = mysqli_query($conexao, $sql_verificar);
    if (mysqli_num_rows($resultado_verificar) > 0) {
        echo "<script>alert('ID do funcionário já existe. Por favor, escolha outro ID.');</script>";
        echo "<script>window.location = 'funcionario.php';</script>";
        exit(); 
    }

    $sql = "INSERT INTO funcionario (idfuncionario, nome, cargo) VALUES ($idfuncionario, '$nome', '$cargo')";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Funcionário adicionado com sucesso!');</script>";
        echo "<script>window.location = 'funcionario.php';</script>";
    } else {
        echo "Erro ao adicionar o funcionário: " . mysqli_error($conexao);
    }
}
?>
