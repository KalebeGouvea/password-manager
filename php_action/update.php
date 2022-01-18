<?php
require_once 'connect.php';
require_once 'functions.php';

if (isset($_POST['btn-editar'])) {
    $id = test_input($_POST['formID']);
    $servico = test_input($_POST['formServico']);
    $usuario = test_input($_POST['formUsuario']);
    $senha = test_input($_POST['formSenha']);

    $sql = "UPDATE dados SET servico=?, usuario=?, senha=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ssss', $servico, $usuario, $senha, $id);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    header('Location: ../index.php?sucesso');
}
?>