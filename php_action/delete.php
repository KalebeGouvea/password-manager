<?php
require_once 'connect.php';
require_once 'functions.php';

if (isset($_POST['btn-deletar'])) {
    $id = test_input($_POST['formID']);

    $sql = "DELETE FROM dados WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header('Location: ../index.php?sucesso');
    } else {
        header('Location: ../index.php?falha');
    }
}
mysqli_close($conn);
?>