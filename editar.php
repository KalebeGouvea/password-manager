<?php
require_once 'php_action/connect.php'; 
include_once 'includes/header.php';
if (isset($_GET['id'])) {
    $sql = "SELECT id, servico, usuario, senha FROM dados WHERE id=".$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<div class="container w-50">
    <h1 class="mt-5 mb-4">Editar</h1>
    <form action="php_action/update.php" method="POST">
        <div class="mb-3 w-50">
            <label for="formServico" class="form-label">Serviço</label>
            <input type="text" class="form-control" id="formServico" name="formServico" placeholder="Nome do serviço" value="<?php echo $row['servico']; ?>">
        </div>
        <div class="mb-3 w-50">
            <label for="formUsuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="formUsuario" name="formUsuario" placeholder="Digite o usuário" value="<?php echo $row['usuario']; ?>">
        </div>
        <div class="mb-3 w-50">
            <label for="formSenha" class="form-label">Senha</label>
            <input type="text" class="form-control" id="formSenha" name="formSenha" placeholder="Digite a senha" value="<?php echo $row['senha']; ?>">
        </div>
        <input type="hidden" name="formID" value="<?php echo $_GET['id'] ?>">
        <button type="submit" class="btn btn-primary me-2" name="btn-editar">Salvar</button>
        <button type="reset" class="btn btn-outline-secondary" name="btn-limpar">Limpar</button>
    </form>
</div>
<?php include_once 'includes/footer.php';?>