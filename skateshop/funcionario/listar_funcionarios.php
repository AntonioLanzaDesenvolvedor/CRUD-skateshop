<?php
include '../conexao.php';

$sql = "SELECT * FROM funcionario";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['idfuncionario'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['cargo'] . "</td>";
        echo "<td>
                <form action='editar_funcionario.php' method='POST' class='d-inline'>
                    <input type='hidden' name='idfuncionario' value='" . $row['idfuncionario'] . "'>
                    <button type='submit' class='btn btn-primary btn-sm'>Editar</button>
                </form>
                <form action='excluir_funcionario.php' method='POST' class='d-inline'>
                    <input type='hidden' name='idfuncionario' value='" . $row['idfuncionario'] . "'>
                    <button type='submit' class='btn btn-danger btn-sm'>Excluir</button>
                </form>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nenhum funcionário cadastrado.</td></tr>";
}
?>
