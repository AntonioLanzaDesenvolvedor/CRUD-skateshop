<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idfuncionario = $_POST['idfuncionario'];

 
    $sql_verificar = "SELECT * FROM funcionario WHERE idfuncionario = $idfuncionario";
    $resultado_verificar = mysqli_query($conexao, $sql_verificar);
    if (mysqli_num_rows($resultado_verificar) == 0) {
        echo "<script>alert('Funcionário não encontrado.');</script>";
        echo "<script>window.location = 'funcionario.php';</script>";
        exit(); 
    }

    $sql = "DELETE FROM funcionario WHERE idfuncionario = $idfuncionario";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Funcionário excluído com sucesso!');</script>";
        echo "<script>window.location = 'funcionario.php';</script>";
    } else {
        echo "Erro ao excluir o funcionário: " . mysqli_error($conexao);
    }
}
?>
