<?php
include '../conexao.php';

$sql = "SELECT * FROM pedido";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['idpedido'] . "</td>";
        echo "<td>" . $row['data'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['fk_idcliente'] . "</td>";
        echo "<td>" . $row['fk_idfuncionario'] . "</td>";
        echo "<td>
                <a href='editar_pedido.php?idpedido=" . $row['idpedido'] . "' class='btn btn-primary btn-sm'>Editar</a>
                <a href='excluir_pedido.php?idpedido=" . $row['idpedido'] . "' class='btn btn-danger btn-sm'>Excluir</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Nenhum pedido cadastrado.</td></tr>";
}
?>
