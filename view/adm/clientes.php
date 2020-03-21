<?php $import->table("css") ?>

<div class="container">
    <h2 class="my-4 text-center">Tabela de Clientes</h2>
    <br>
    <!-- table... -->
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="20px" class="text-center"><i class="fas fa-user-edit"></th>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../model/user.php");
                    $user = new User();
                    $data = $user->select();
                
                    foreach ($data as $key => $value) { ?>
                        <tr>
                            <td width="20px" class="text-center">
                                <a href="../controller/user.php?op=edit&id=<?= $value["id"] ?>"><i class="fas fa-user-edit"></i></a>
                            </td>
                            <td><?= $value["id"] ?></td>
                            <td><?= $value["name"] ?></td>
                            <td><?= $value["username"] ?></td>
                            <td><?= $value["email"] ?></td>
                            <td><?= $value["type"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /table... -->

</div>

<?php $import->table("js") ?>