<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Register_Login</title>
</head>

<body
    style="background-image: url('https://img.freepik.com/premium-vector/network-connection-background-abstract-style_23-2148875738.jpg'); background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="background-image: url('https://img.freepik.com/premium-vector/network-connection-background-abstract-style_23-2148875738.jpg'); background-size: cover;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: #fff">Register_Login</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" style="color: #fff">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="color: #fff">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="
        text-align: center;
        padding: 20px;">
        <h1 class="mt-5" style="color: #fff;">Welcome to the Register_Login page!</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
