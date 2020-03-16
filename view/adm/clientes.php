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

                    foreach ($data as $key => $value) {
                        echo "<tr>";
                        echo  "<td>" . $value["name"] . "</td>";
                        echo  "<td>" . $value["username"] . "</td>";
                        echo  "<td>" . $value["email"] . "</td>";
                        echo  "<td>" . $value["type"] . "</td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- /table... -->

</div>

<?php $import->table("js") ?>