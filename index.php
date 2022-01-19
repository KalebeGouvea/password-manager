<?php 
require_once 'php_action/connect.php';
include_once 'includes/header.php';
?>

<div class="container w-50">
    <h1 class="mt-5 mb-4">Senhas salvas</h1>
    <a class="btn btn-primary float-end" href="adicionar.php" role="button">Adicionar</a>
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
            $sql = "SELECT id, servico, usuario, senha FROM dados";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0):
                while ($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <td><?php echo $row["servico"]; ?></td>
                        <td><?php echo $row["usuario"]; ?></td>
                        <td><?php echo $row["senha"]; ?></td>
                        <td width="200">
                            <a class="btn btn-warning mx-2" href="editar.php?id=<?php echo $row["id"]; ?>" role="button" style="color: white;">
                                <span class="bi bi-pencil-fill" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-danger mx-2" data-bs-toggle="modal" href="#modalDeletar<?php echo $row["id"]; ?>" role="button">
                                <span class="bi bi-trash-fill" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>

                    <div class="modal fade" id="modalDeletar<?php echo $row["id"]; ?>" tabindex="-1" aria-labelledby="modalDeletarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalDeletarLabel">Deletar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Tem certeza que deseja deletar?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="php_action/delete.php" method="POST">
                                        <input type="hidden" name="formID" value="<?php echo $row["id"]; ?>">
                                        <button type="submit" class="btn btn-danger" name="btn-deletar">Sim, deletar</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php include_once 'includes/footer.php';?>