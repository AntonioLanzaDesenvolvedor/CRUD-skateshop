<?php
include '../conexao.php';

$data = $_POST['data'];
$status = $_POST['status'];
$fk_idcliente = $_POST['fk_idcliente'];
$fk_idfuncionario = $_POST['fk_idfuncionario'];
$idpedido = mt_rand(1000, 9999);


$sql_verificar_id = "SELECT idpedido FROM pedido WHERE idpedido = '$idpedido'";
$resultado_verificar_id = mysqli_query($conexao, $sql_verificar_id);
while (mysqli_num_rows($resultado_verificar_id) > 0) {
    $idpedido = mt_rand(1000, 9999); 
    $resultado_verificar_id = mysqli_query($conexao, $sql_verificar_id);
}

$sql = "INSERT INTO pedido (idpedido, data, status, fk_idcliente, fk_idfuncionario) VALUES ('$idpedido', '$data', '$status', '$fk_idcliente', '$fk_idfuncionario')";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    header("Location: pedido.php");
} else {
    echo "Erro ao adicionar pedido: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
