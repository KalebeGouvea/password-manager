<?php
require_once 'connect.php';

if (isset($_POST['btn-deletar'])) {
    $id = $_POST['formID'];

    $sql = "DELETE FROM dados WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header('Location: ../index.php?sucesso');
    } else {
        header('Location: ../index.php?falha');
    }
}
mysqli_close($conn);
?>