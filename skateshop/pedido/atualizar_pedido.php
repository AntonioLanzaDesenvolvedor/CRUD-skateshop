<?php
include '../conexao.php';

if(isset($_POST['idpedido'], $_POST['data'], $_POST['status'])) {
    $idpedido = $_POST['idpedido'];
    $data = $_POST['data'];
    $status = $_POST['status'];

    $sql = "UPDATE pedido SET data = '$data', status = '$status' WHERE idpedido = '$idpedido'";
    
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        header("Location: pedido.php");
    } else {
        echo "Erro ao atualizar pedido: " . mysqli_error($conexao);
    }
} else {
    echo "Por favor, preencha todos os campos do formulário.";
}

mysqli_close($conexao);
?>
