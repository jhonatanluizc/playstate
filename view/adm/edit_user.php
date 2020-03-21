<?php
$user_id = $_POST["id"];

require_once("../model/user.php");
$user = new User();
$data = $user->select_where("where id = '$user_id'")[0];
?>
<div class="container">
    <div style="text-align:center;" class="card-header">Editar Usuário </div>
    <div class="card-body">
        <form action="../controller/user.php?op=update" method="post">
            <input hidden value="<?= $data["id"] ?>" name="id" id="id" type="text" class="form-control">

            <div class="form-group">
                <div class="form-row">
                    <div class="col-sm-12 col-lg-12 mt-1">
                        <div class="form-label-group">
                            <input value="<?= $data["name"] ?>" name="name" id="name" placeholder="Nome Completo" type="text" class="form-control" required autofocus="autofocus">
                            <label for="name">Nome Completo</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row ">
                    <div class="col-sm-12 col-lg-6 mt-1">
                        <div class="form-label-group">
                            <input value="<?= $data["username"] ?>" name="username" id="username" placeholder="Username" type="text" class="form-control" required>
                            <label for="username">Username</label>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6 mt-1">
                        <select name="type" id="type" placeholder="Tipo de usuário" class="form-control" style="height: 50px" required>
                            <?php if ($data["type"] == "admin") { ?>
                                <option selected value="admin">Administrador</option>
                                <option value="user">Usuário</option>
                            <?php } else { ?>
                                <option value="admin">Administrador</option>
                                <option selected value="user">Usuário</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12 col-lg-6 mt-1">
                        <div class="form-label-group">
                            <input value="<?= $data["email"] ?>" name="email" id="email" placeholder="Email" type="text" class="form-control" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mt-1">
                        <div class="form-label-group">
                            <input value="<?= $data["password"] ?>" name="password" id="password" placeholder="password" type="text" class="form-control" required>
                            <label for="password">Senha</label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-block" type="submit">Editar Usuário</button>
        </form>

    </div>

</div>