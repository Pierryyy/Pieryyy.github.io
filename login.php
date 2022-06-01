<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login Pixadura</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/login.css" rel="stylesheet">

</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulário de login</h3>
                            <form action="acoes/login.php" method="POST">
                                <div class="row">
                                    <div class="form-outline">
                                        <label class="form-label" for="lastName">Email: </label>
                                        <input placeholder="email@gmail.com" type="email" id="emailAddress"
                                            class="form-control form-control-lg" name="emailAddress" />
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="lastName">Senha: </label>
                                            <input placeholder="***************" type="password" id="password"
                                                class="form-control form-control-lg" name="password" />
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <input class="btn btn-primary btn-lg" type="submit" value="Login" name="bt_login" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>