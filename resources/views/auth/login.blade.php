<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="{{asset('/assets/css/login.css')}}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form method="POST" action="{{ route('login') }}" class="login">
                    @csrf
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input name="email" type="text" class="login__input form-control  @error('email') is-invalid @enderror" placeholder="Correo Electronico" required>
                        <br>
                        @error('email')                        
                        <span class="invalid-feedback" role="alert" style="color: red; font-size:10px;">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input name="password" type="password" class="login__input form-control  @error('password') is-invalid @enderror" placeholder="Contraseña" required>
                        <br>
                        @error('password')
                        <span class="invalid-feedback" role="alert" style="color: red; font-size:10px;">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button class="button login__submit" type="submit">
                        <span class="button__text">Ingresar</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <div class="social-login">
                    <h3>CRAA</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>

</html>