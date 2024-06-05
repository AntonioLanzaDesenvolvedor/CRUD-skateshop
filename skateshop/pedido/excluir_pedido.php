<?php
include '../conexao.php';
if(isset($_GET['idpedido']) && !empty($_GET['idpedido'])) {
    $idpedido = $_GET['idpedido'];
    $sql = "DELETE FROM pedido WHERE idpedido = '$idpedido'";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado) {
        echo "Pedido excluído com sucesso!";
    } else {
        echo "Erro ao excluir pedido: " . mysqli_error($conexao);
    }
} else {
    echo "ID do pedido não fornecido. <a href='listar_pedidos.php'>Voltar</a>";
}

mysqli_close($conexao);
?>
