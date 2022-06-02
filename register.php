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
</head>

<body>
  <section class="gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulário de registro</h3>

              <form method="POST" action="acoes/register-user.php">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label class="form-label">Nome: </label>
                    <input id="name" name="name" class="form-control cpf" placeholder="Nome completo">
                  </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label">Número de Telefone: </label>
                      <input type="text" id="phone" name="phone" placeholder="51999999999" class="form-control" />

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label class="form-label">CPF:</label>
                    <input id="cpf" name="cpf" class="form-control" placeholder="00000000000">
                  </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label">Cidade:</label>
                      <input type="text" id="city" name="city" placeholder="Cidade" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="emailAddress">Email:</label>
                      <input type="email" id="email" placeholder="seuemail@gmail.com" name="email"
                        class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="password">Senha: </label>
                      <input type="password" id="passsword" placeholder="**********" name="password"
                        class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-6 mb-4">
                    <select class="key" name="keypix" id="keypix">
                      <option selected>TIPO DE CHAVE</option>
                      <option value="cpf">CPF</option>
                      <option value="email">EMAIL</option>
                      <option value="phone">CELULAR</option>
                    </select>
                  </div>
                  <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" type="submit" value="Registrar" name="bt_register" />
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