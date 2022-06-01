<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER PIXADURA</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/login.css" rel="stylesheet">

    <!-- mascaras para textos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <script type="text/javascript">
    $("#phoneNumber, #phoneNumber").mask("(00) 0000-0000");
    $("#birthdayDate").mask("00/00/0000");
    $("#cpf").mask("000.000.000-00");
    $("#cep").mask("00000-000");
    </script>
    <script>

    </script>
</head>

<body>
    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulário de registro</h3>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="firstName">Nome:</label>
                                            <input type="text" id="firstName" name="firstName"
                                                placeholder="Primeiro Nome" class="form-control form-control-lg" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="lastName">Sobrenome:</label>
                                            <input type="text" id="lastName" name="lastName" placeholder="Segundo Nome"
                                                class="form-control form-control-lg" />

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <label for="birthdayDate" class="form-label">Data de nascimento:</label>
                                            <input type="text" id="birthdayDate" name="birthdayDate"
                                                placeholder="00/00/0000" class="form-control form-control-lg"
                                                id="birthdayDate" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="cpf" class="cpf form-label">CPF:</label>
                                        <input id="cpf" name="cpf" class="form-control cpf"
                                            placeholder="Ex.: 000.000.000-00">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Email:</label>
                                            <input type="email" id="emailAddress" placeholder="seuemail@gmail.com"
                                                name="email" class="form-control form-control-lg" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Número de Telefone:</label>
                                            <input type="text" id="phoneNumber" name="phoneNumber"
                                                placeholder="(00) 000000000" class="form-control phoneNumber-mask" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <select class="select">
                                            <option value="1">TIPO DE CHAVE</option>
                                            <option value="2">CPF</option>
                                            <option value="3">EMAIL</option>
                                            <option value="4">CELULAR</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="mb-4 text">Endereço</h3>
                                            <div class="row">
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="cep">CEP:</label>
                                                <input placeholder="00000-000" type="text" name="cep" id="cep"
                                                    class="form-control form-control-lg" />

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label" for="estate">Estado:</label>
                                                    <input placeholder="Estado" type="text" id="state" name="state"
                                                        class="form-control form-control-lg" />

                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label" for="city">Cidade:</label>
                                                    <input placeholder="Cidade" type="text" id="city" name="city"
                                                        class="form-control form-control-lg" />

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label" for="street">Rua:</label>
                                                    <input placeholder="Rua" type="text" id="street" name="street"
                                                        class="form-control form-control-lg" />

                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label" for="houseNumber">Número:</label>
                                                    <input placeholder="Número" type="houseNumber" id="houseNumber"
                                                        class="form-control form-control-lg" name="houseNumber" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Registrar"
                                            name="bt_register" />
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