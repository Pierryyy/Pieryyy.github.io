<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Signin Template · Bootstrap v5.1</title>
        <link href="./assets/css/login.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <nav class="navbar navbar-dark bg-success">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Navbar</a>
        </div>
    </nav>
    <body>
        <div class="container">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Perfil</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Primeiro Nome: </label>
                                    <input type="text" class="form-control" placeholder="Fulano" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Segundo Nome:</label>
                                    <input type="text" class="form-control" value="" placeholder="De Tal">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Numero de Telefone:</label>
                                    <input type="text" class="form-control" placeholder="(00)0000-0000" value=""></div>
                                <div class="col-md-12">
                                    <label class="labels">Email:</label>
                                    <input type="text" class="form-control" placeholder="email@gmail.com" value="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">CPF</label><input type="text" class="form-control" placeholder="XXX.XXX.XXX-XX" value=""></div>
                                <div class="col-md-6"><label class="labels">Data de Nascimento</label><input type="text" class="form-control" value="" placeholder="00/00/0000"></div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Endereço</h4>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Endereço</label>
                                <input type="text" class="form-control" placeholder="Insira seu Endereço" value="">
                            </div>
                            <div class="col-md-12">
                                    <label class="labels">CEP</label>
                                    <input type="text" class="form-control" placeholder="00000-000" value="">
                                </div>
                            <div class="col-md-12"><label class="labels">Estado</label><input type="text" class="form-control" placeholder="Rio Grande do Sul" value=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
