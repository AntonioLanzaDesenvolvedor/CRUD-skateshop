<?php
include '../conexao.php';

$idcliente = $_POST['idcliente'];
$sql_delete_pedidos = "DELETE FROM pedido WHERE fk_idcliente = $idcliente";
mysqli_query($conexao, $sql_delete_pedidos);

$sql_delete_cliente = "DELETE FROM cliente WHERE idcliente = $idcliente";
mysqli_query($conexao, $sql_delete_cliente);

if (mysqli_affected_rows($conexao) > 0) {
    header("Location: cliente.php");
} else {
    echo "Erro ao excluir o cliente.";
}

mysqli_close($conexao);
?>
