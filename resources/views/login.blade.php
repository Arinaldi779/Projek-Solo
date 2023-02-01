<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/templateLogin.css">
</head>

<body>

    <div class="main">

        <!-- Sign In  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    {{-- Pindah ke Register --}}
                    <div class="signin-image">
                        <figure><img src="img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="register" class="signup-image-link">Create an account</a>
                    </div>
                    {{-- Form Login Content --}}
                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>

                        {{-- Alert --}}
                        @if(session()->has('logout')) 
                        <div class="alert alert-succes" role="alert">
                            {{ session('logout') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                        @endif
                        {{-- /. Alert --}}

                        <form action="{{ route('login') }}" method="POST" class="register-form" id="login-form">
                            @csrf
                            @if(session()->has('errors')) 
                            <div class="alert alert-danger" role="alert">
                                {{ session('errors') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                            </div>
                            @endif
                            {{-- Username --}}
                            <div class="form-group">
                                <label for="usern"><i
                                        class="zmdi zmdi-account material-icons-name fa fa-user"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" autofocus />
                            </div>
                            {{-- Password --}}
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock fa fa-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" />
                            </div>
                            {{-- Button --}}
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        {{-- Social --}}
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi fas fa-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi fas fa-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi fas fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
