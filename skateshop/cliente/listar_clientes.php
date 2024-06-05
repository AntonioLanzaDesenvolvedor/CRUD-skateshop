<?php
include '../conexao.php';

$sql = "SELECT * FROM cliente";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['idcliente'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['telefone'] . "</td>";
        echo "<td>" . $row['cpf'] . "</td>";
        echo "<td>
                <div class='d-inline'>
                    <form action='editar_cliente.php' method='POST' class='d-inline'>
                        <input type='hidden' name='idcliente' value='" . $row['idcliente'] . "'>
                        <button type='submit' class='btn btn-primary btn-sm'>Editar</button>
                    </form>
                    <form action='excluir_cliente.php' method='POST' class='d-inline'>
                        <input type='hidden' name='idcliente' value='" . $row['idcliente'] . "'>
                        <button type='submit' class='btn btn-danger btn-sm'>Excluir</button>
                    </form>
                </div>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Nenhum cliente cadastrado.</td></tr>";
}
?>
  