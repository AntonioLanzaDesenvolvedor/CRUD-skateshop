<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idfuncionario = $_POST['idfuncionario'];
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];

    $sql = "UPDATE funcionario SET nome='$nome', cargo='$cargo' WHERE idfuncionario=$idfuncionario";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Funcionário atualizado com sucesso!');</script>";
        echo "<script>window.location = 'funcionario.php';</script>";
    } else {
        echo "Erro ao atualizar o funcionário: " . mysqli_error($conexao);
    }
}
?>
