<?php
include '../conexao.php';

$sql = "SELECT * FROM produto";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['idproduto'] . "</td>";
        echo "<td>" . $row['descricao'] . "</td>";
        echo "<td>" . $row['preco'] . "</td>";
        echo "<td>" . $row['marca'] . "</td>";
        echo "<td>" . intval($row['quantidade']) . "</td>";
        echo "<td>
                <a href='editar_produto.php?idproduto=" . $row['idproduto'] . "' class='btn btn-primary btn-sm'>Editar</a>
                <form action='excluir_produto.php' method='POST' class='d-inline'>
                    <input type='hidden' name='idproduto' value='" . $row['idproduto'] . "'>
                    <button type='submit' class='btn btn-danger btn-sm'>Excluir</button>
                </form>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Nenhum produto cadastrado.</td></tr>";
}

mysqli_close($conexao);
?>
