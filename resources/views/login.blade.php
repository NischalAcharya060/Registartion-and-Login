<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body style="background-image: url('https://img.freepik.com/premium-vector/network-connection-background-abstract-style_23-2148875738.jpg'); background-size: cover;">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title">Login</h1>
          </div>
          <div class="card-body">
            @if(Session::has('error'))
              <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
              </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" value="{{old('email')}}" name="email" class="form-control" id="email" placeholder="enter your email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <input type="password" name="password" class="form-control" placeholder="enter your password" id="password" required>
                  <button type="button" id="togglePassword" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">
                    <span class="material-icons-outlined">Show_Password</span>
                  </button>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input type="checkbox" name="remember" class="form-check-input" id="remember">
                  <label class="form-check-label" for="remember">Remember Me</label>
                </div>
              </div>
              <div class="mb-3">
                <div class="d-grid">
                  <button class="btn btn-primary">Login</button>
                </div>
              </div>
            </form>
            <div class="text-center">
              <p>Don't have an account? <a href="{{ route('register') }}" style="text-decoration: none">Register here</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var toggleButton = document.getElementById("togglePassword");
        
        if (passwordField.type === "password") {
          passwordField.type = "text";
          toggleButton.innerHTML = '<span class="material-icons-outlined">Hide_Password</span>';
        } else {
          passwordField.type = "password";
          toggleButton.innerHTML = '<span class="material-icons-outlined">Show_Password</span>';
        }
      }
    </script>
  </body>
</html>
