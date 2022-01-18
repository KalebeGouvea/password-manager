<?php
require_once 'connect.php';
require_once 'functions.php';

if (isset($_POST['btn-deletar'])) {
    $id = test_input($_POST['formID']);

    $sql = "DELETE FROM dados WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $id);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    header('Location: ../index.php?sucesso');
}
?>