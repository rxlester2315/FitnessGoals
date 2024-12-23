<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Template</title>
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="loginss/assets/css/login.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>


    </head>

    <body>
        <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
            <div class="container">
                <div class="card login-card reversed">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="loginss/assets/images/aa1.jpg" alt="login" class="login-card-img">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <div class="brand-wrapper">
                                    <a href="{{url('/')}}">
                                        <img src="loginss/assets/images/logoz.png" alt="logo" class="logo">

                                    </a>
                                </div>
                                <p class="login-card-description">Register Account</p>
                                <form action="{{ route('accountregister') }}" method="POST">
                                    @csrf
                                    <!-- Don't forget CSRF protection! -->

                                    <div class="form-group">
                                        Name
                                        <label for="name" class="sr-only">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter Your Name">
                                    </div>

                                    <div class="form-group">Email Address
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email address">
                                    </div>

                                    <div class="form-group mb-4">
                                        Create Password
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Enter Password">
                                    </div>

                                    <div class="form-group mb-4">
                                        Confirm Password
                                        <label for="password" class="sr-only">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="form-control" placeholder="Confirm Password" required>
                                    </div>

                                    <button type="submit" class="btn btn-block login-btn mb-4">Register</button>
                                </form>

                                <a href="#!" class="forgot-password-link">Forgot password?</a>
                                <a href="{{url('login')}}">
                                    <p class="login-card-footer-text">Already have an Account?</p>
                                </a>
                                <nav class="login-card-footer-nav">
                                    <a href="#!">Terms of use.</a>
                                    <a href="#!">Privacy policy</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                @if(Session::has('message'))
                <script>
                swal("Message", "{{Session::get('message')}}", 'success', {
                    button: true,
                    button: "Okay",
                    timer: 3000,


                });
                </script>
                @endif


                <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>

</html>