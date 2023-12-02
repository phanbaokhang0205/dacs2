{{-- <!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container-login">
        <div class="login-left">
            <div class="login-header">
                <p>Welcome to Our Website</p>
            </div>
            <form class="login-form" method="POST" action="">
                @csrf
                <div class="login-with-gg">
                    <a href="#">
                        <img width="30"
                            src="https://tse1.mm.bing.net/th?id=OIP.AfKMLf4rKX7EqOSAVpujIQHaEK&pid=Api&P=0&h=180"
                            alt="">
                        Sign in with Google
                    </a>
                    <div class="text">
                        <hr>
                    </div>
                </div>  
                
                <div class="login-with-email">
                    <div class="form-item">
                        <label for="email">Email</label>
                        <input type="text" id="email"  class="input-field">
                    </div>
                    <div class="form-item">
                        <div class="pass-forgot">
                            <label for="password">Password</label>
                            <a href="" class="forgot text-dark">Forgot?</a>
                        </div>
                        <input type="password" id="password"  class="input-field">
                    </div>
                    <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" id="rememberMeCheckbox" checked>
                            <label for="rememberMeCheckbox" class="checkboxLabel">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="signin">Sign In</button>
                </div>
                <div class="login-form-footer">
                    <p>Don't have an account?</p>
                    <a href="{{ route('register') }}" class="text-dark">Sign up</a>
                </div>
            </form>
        </div>
        <div class="login-right">
            <img src="{{ asset('img/svg.avif') }}" alt="" width="100%" height="100%">
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html> --}}