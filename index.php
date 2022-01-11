<?php include_once 'includes/header.php';?>
<div class="container w-50">
    <h1 class="mt-5 mb-4">Senhas salvas</h1>
    <a class="btn btn-primary float-end" href="#" role="button">Adicionar</a>
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">Serviço</th>
                <th scope="col">Usuário</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Facebook</td>
                <td>email@email.com</td>
                <td>password123</td>
                <td width="200">
                    <a class="btn btn-warning mx-2" href="#" role="button" style="color: white;">
                        <span class="bi bi-pencil-fill" aria-hidden="true"></span>
                    </a>
                    <a class="btn btn-danger mx-2" href="#" role="button">
                        <span class="bi bi-trash-fill" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Google</td>
                <td>email@email.com</td>
                <td>password321</td>
                <td width="200">
                    <a class="btn btn-warning mx-2" href="#" role="button" style="color: white;">
                        <span class="bi bi-pencil-fill" aria-hidden="true"></span>
                    </a>
                    <a class="btn btn-danger mx-2" href="#" role="button">
                        <span class="bi bi-trash-fill" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Reddit</td>
                <td>email@email.com</td>
                <td>321password</td>
                <td width="200">
                    <a class="btn btn-warning mx-2" href="#" role="button" style="color: white;">
                        <span class="bi bi-pencil-fill" aria-hidden="true"></span>
                    </a>
                    <a class="btn btn-danger mx-2" href="#" role="button">
                        <span class="bi bi-trash-fill" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include_once 'includes/footer.php';?>