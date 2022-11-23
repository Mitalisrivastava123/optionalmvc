<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-white text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <form class="px-md-2" action="../Controllers/logincontroller.php" method="POST">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase text-dark">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email"/>
                <label class="form-label text-dark" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                <label class="form-label text-dark" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-dark-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-success btn-lg px-5 text-dark" type="submit">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="../Views/registrationform.php" class="text-dark-50 fw-bold">Sign Up</a>
              </p>
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