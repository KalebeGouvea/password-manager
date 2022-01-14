<?php
require_once 'connect.php';

if (isset($_POST['btn-editar'])) {
    $id = $_POST['formID'];
    $servico = $_POST['formServico'];
    $usuario = $_POST['formUsuario'];
    $senha = $_POST['formSenha'];

    $sql = "UPDATE dados SET servico='$servico', usuario='$usuario', senha='$senha' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header('Location: ../index.php?sucesso');
    } else {
        header('Location: ../index.php?falha');
    }
}
mysqli_close($conn);
?>