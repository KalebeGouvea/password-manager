<?php
require_once 'connect.php';
require_once 'functions.php';

$servico = test_input($_POST['formServico']);
$usuario = test_input($_POST['formUsuario']);
$senha = test_input($_POST['formSenha']);


$sql = "INSERT INTO dados (servico, usuario, senha) VALUES ('$servico', '$usuario', '$senha')";
if (mysqli_query($conn, $sql)) {
    header('Location: ../index.php?sucesso');
} else {
    header('Location: ../index.php?falha');
}
mysqli_close($conn);
?>