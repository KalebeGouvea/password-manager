<?php 
require_once 'php_action/connect.php';
include_once 'includes/header.php';
?>

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
            <?php
            $sql = "SELECT servico, usuario, senha FROM dados";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                                <td>'.$row["servico"].'</td>
                                <td>'.$row["usuario"].'</td>
                                <td>'.$row["senha"].'</td>
                                <td width="200">
                                    <a class="btn btn-warning mx-2" href="#" role="button" style="color: white;">
                                        <span class="bi bi-pencil-fill" aria-hidden="true"></span>
                                    </a>
                                    <a class="btn btn-danger mx-2" href="#" role="button">
                                        <span class="bi bi-trash-fill" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>';
                }
            } else {
                echo '<td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>';
            }
            ?>
        </tbody>
    </table>
</div>
<?php include_once 'includes/footer.php';?>