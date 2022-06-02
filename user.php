<?php
    include_once('acoes/get-user.php')
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>PERFIL</title>
  <link href="./assets/css/login.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <a href="/user.php" class="navbar-brand">Pixadura</a>
  </div>
</nav>

<body>
  <div class="container">
    <div class="container rounded bg-white mt-5 mb-5">
      <div class="row">
        <div class="col-md-5 border-right">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-right">Perfil:</h4>
            </div>
            <form action="acoes/update-user.php" method="post">
              <div class="row mt-2">
                <div class="col-md-12">
                  <label class="labels">Nome: </label>
                  <input type="text" class="form-control form-control-lg" class="name" name="name"
                    value="<?= $name; ?>">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <label class="form-label" for="phoneNumber">Número de Telefone:</label>
                  <input type="text" id="phone" name="phone" value="<?= $phone; ?>"
                    class="form-control form-control-lg phoneNumber-mask" />
                </div>
                <div class="col-md-6"><label class="labels">Cidade:</label>
                  <input type="text" name="city" class="form-control form-control-lg" id="city" value="<?= $city; ?>" />
                </div>
                <div class="col-md-12">
                  <label class="labels">Email:</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg"
                    value="<?= $email; ?>" />
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <label class="labels">CPF:</label>
                  <input id="cpf" name="cpf" class="form-control form-control-lg cpf" value="<?= $cpf; ?>">
                </div>
                <div class="col-md-6"><label class="labels">Chave PIX:</label>
                  <input type="text" name="keypix" class="form-control form-control-lg" id="keypix"
                    value="<?= $keypix; ?>" />
                </div>
              </div>
              <br>
              <div class="row mt-3">
                <div class="col-md-6">
                  <input class="btn btn-primary btn-lg" type="submit" value="Atualizar Perfil" name="bt_update" />
                </div>
            </form>
            <div class="col-md-6">
              <form action="acoes/delete-user.php" method="post">
                <div>
                  <input class="btn btn-danger btn-lg" type="submit" value="Remover Perfil" name="bt_delete" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 border-right">
        <img src="assets/arquivos/response.png" style="width: 100%; height: 100%;">
      </div>
    </div>
  </div>
  </div>
</body>

</html>