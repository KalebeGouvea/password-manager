<?php
require_once 'connect.php';
require_once 'functions.php';

$servico = test_input($_POST['formServico']);
$usuario = test_input($_POST['formUsuario']);
$senha = test_input($_POST['formSenha']);

$sql = "INSERT INTO dados (servico, usuario, senha) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'sss', $servico, $usuario, $senha);
mysqli_stmt_execute($stmt);
mysqli_close($conn);
header('Location: ../index.php?sucesso');
?>