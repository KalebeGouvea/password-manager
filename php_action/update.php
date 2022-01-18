<?php
require_once 'connect.php';
require_once 'functions.php';

if (isset($_POST['btn-editar'])) {
    $id = test_input($_POST['formID']);
    $servico = test_input($_POST['formServico']);
    $usuario = test_input($_POST['formUsuario']);
    $senha = test_input($_POST['formSenha']);

    $sql = "UPDATE dados SET servico='$servico', usuario='$usuario', senha='$senha' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header('Location: ../index.php?sucesso');
    } else {
        header('Location: ../index.php?falha');
    }
}
mysqli_close($conn);
?>