<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

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
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                <form>

                  <div class="row">
                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" />
                        <label class="form-label" for="firstName">First Name</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" />
                        <label class="form-label" for="lastName">Last Name</label>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                      <div class="form-outline datepicker w-100">
                        <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                        <label for="birthdayDate" class="form-label">Birthday</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4">

                      <h6 class="mb-2 pb-1">Gender: </h6>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                          value="option1" checked />
                        <label class="form-check-label" for="femaleGender">Female</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                          value="option2" />
                        <label class="form-check-label" for="maleGender">Male</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                          value="option3" />
                        <label class="form-check-label" for="otherGender">Other</label>
                      </div>

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
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">

                      <select class="select form-control-lg">
                        <option value="1" disabled>Choose option</option>
                        <option value="2">Subject 1</option>
                        <option value="3">Subject 2</option>
                        <option value="4">Subject 3</option>
                      </select>
                      <label class="form-label select-label">Choose option</label>

                    </div>
                  </div>

                  <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
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
