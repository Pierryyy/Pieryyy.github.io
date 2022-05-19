<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tela de Usuario</title>
    <link href="./assets/css/login.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $("#phoneNumber, #phoneNumber").mask("(00) 0000-0000");
        $("#birthdayDate").mask("00/00/0000");
        $("#cpf").mask("000.000.000-00");
        $("#cep").mask("00000-000");
    </script>

</head>
<nav class="navbar navbar-dark bg-success">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">Pixadura</a>
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
                                <input type="text" class="form-control form-control-lg" placeholder="Fulano" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Segundo Nome:</label>
                                <input type="text" class="form-control form-control-lg" value="" placeholder="De Tal">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                            <label class="form-label" for="phoneNumber">Número de Telefone:</label>
                                <input type="text" id="phoneNumber" name="phoneNumber" placeholder="(00) 000000000" class="form-control form-control-lg phoneNumber-mask" />
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email:</label>
                                <input type="email" id="emailAddress" placeholder="seuemail@gmail.com" class="form-control form-control-lg" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">CPF</label>
                            <input id="cpf" name="cpf" class="form-control form-control-lg cpf" placeholder="Ex.: 000.000.000-00">
                        </div>
                            <div class="col-md-6"><label class="labels">Data de Nascimento</label>
                            <input type="text" name="birthdayDate" placeholder="00/00/0000" class="form-control form-control-lg" id="birthdayDate" /></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Salvar Perfil</button> <button class="btn btn-primary profile-button" type="button">Deletar Perfil</button></div>
                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Endereço</h4>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Endereço</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Insira seu Endereço" value="">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="form3Example8">Número:</label>
                          <input placeholder="Número" type="number" id="form3Example8" class="form-control form-control-lg" />
                          
                        </div>
                        <div class="col-md-12">
                            <label class="labels">CEP</label>
                            <input placeholder="00000-000" type="text" name="cep" id="cep" class="form-control form-control-lg" />
                        </div>
                        <div class="col-md-12"><label class="labels">Estado</label><input type="text" class="form-control form-control-lg" placeholder="Rio Grande do Sul" value=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>