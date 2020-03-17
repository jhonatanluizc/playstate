<?php $import->all(); ?>
<style>
    root {
        --input-padding-x: 1.5rem;
        --input-padding-y: .75rem;
    }

    body {
        background: #007bff;
        background: linear-gradient(to right, #0062E6, #33AEFF);
    }

    .card-signin {
        border: 0;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card-signin .card-title {
        margin-bottom: 2rem;
        font-weight: 300;
        font-size: 1.5rem;
    }

    .card-signin .card-body {
        padding: 2rem;
    }

    .form-signin {
        width: 100%;
    }

    .form-signin .btn {
        font-size: 80%;
        border-radius: 5rem;
        letter-spacing: .1rem;
        font-weight: bold;
        padding: 1rem;
        transition: all 0.2s;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group input {
        height: auto;
        border-radius: 2rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }



    .card input {
        padding: 10px;
    }


    /* Fallback for Edge
-------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }

    /* Fallback for IE
-------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form class="form-signin" action="../controller/user.php?op=login" method="post">
                        <div class="form-label-group">
                            <input name="user" type="text" id="inputEmail" class="form-control" placeholder="Email ou Username" required autofocus>

                        </div>

                        <div class="form-label-group">
                            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                        </div>

                        <button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit">Realizar Login</button>
                        <button onclick="window.location.href ='../controller/site.php?view=cadastro'" class="btn btn-lg btn-success btn-block text-uppercase" type="button">Criar Conta</button>
                        <button onclick="javascript:history.go(-1)" class="btn btn-lg btn-danger btn-block text-uppercase" type="button">Cancelar</button>

                        <hr class="my-4">
                        <div class="text-right mx-auto">
                            <a href="#">Esqueci minha senha</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>