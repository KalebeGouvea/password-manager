<?php
$servico = $_POST['formServico'];
$usuario = $_POST['formUsuario'];
$senha = $_POST['formSenha'];

require_once 'connect.php';

$sql = "INSERT INTO dados (servico, usuario, senha) VALUES ('$servico', '$usuario', '$senha')";
if (mysqli_query($conn, $sql)) {
    header('Location: ../index.php?sucesso');
} else {
    header('Location: ../index.php?falha');
}
mysqli_close($conn);
?>