<?php include_once 'includes/header.php';?>
<div class="container w-50">
    <h1 class="mt-5 mb-4">Adicionar</h1>
    <form>
        <div class="mb-3 w-50">
            <label for="formServico" class="form-label">Serviço</label>
            <input type="text" class="form-control" id="formServico" placeholder="Nome do serviço">
        </div>
        <div class="mb-3 w-50">
            <label for="formUsuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="formUsuario" placeholder="Digite o usuário">
        </div>
        <div class="mb-3 w-50">
            <label for="formSenha" class="form-label">Senha</label>
            <input type="text" class="form-control" id="formSenha" placeholder="Digite a senha">
        </div>
        <button type="submit" class="btn btn-primary me-2">Salvar</button>
        <button type="reset" class="btn btn-outline-secondary">Limpar</button>
    </form>
</div>
<?php include_once 'includes/footer.php';?>