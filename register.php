<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Registro Pixadura</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/login.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulario de registro</h3>
                <form>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" />
                        <label class="form-label" for="firstName">Primeiro Nome</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" />
                        <label class="form-label" for="lastName">Segundo Nome</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">
                      <div class="form-outline datepicker w-100">
                        <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                        <label for="birthdayDate" class="form-label">Data de nascimento</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                    <input type="text" id="form3Example8" class="form-control form-control-lg" />
  
  
                    <label class="form-label" for="cpfnumber">CPF</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="email" id="emailAddress" class="form-control form-control-lg" />
                        <label class="form-label" for="emailAddress">Email</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                        <label class="form-label" for="phoneNumber">Numero de Telefone</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                  <select class="select">
                    <option value="1">TIPO DE CHAVE</option>
                    <option value="2">CPF</option>
                    <option value="3">Email</option>
                    <option value="4">Numero de celular</option>
                  </select>
                  </div>
                  <div class="row">
                    <div class="col-12">
                    <h3 class="mb-4 text">Endereço</h3>
<div class="row">
</div>
<div class="form-outline mb-4">
  <input type="text" id="form3Example3" class="form-control form-control-lg" />
  <label class="form-label" for="form3Example3">CEP</label>
</div>
<div class="row">
  <div class="col-md-6 mb-4">
  <input type="text" id="form3Example8" class="form-control form-control-lg" />
  <label class="form-label" for="form3Example8">Estado</label>
  </div>
  <div class="col-md-6 mb-4">
  <input type="text" id="form3Example8" class="form-control form-control-lg" />
  <label class="form-label" for="form3Example8">Cidade</label>
  </div>
</div>
<div class="form-outline mb-4">
  <input type="text" id="form3Example8" class="form-control form-control-lg" />
  <label class="form-label" for="form3Example8">Rua</label>
  <div class="form-outline mb-4">
  <input type="text" id="formNumero" class="form-control form-control-lg" />
  <label class="form-label" for="formNumero">Numero</label>
</div>
</div>
                    </div>
                  </div>
                  <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" type="submit" value="Enviar" />
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