<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Login</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
        }
        .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        }
        .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #011302;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
        }
        .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
        }
        .form .message a {
        color: #4CAF50;
        text-decoration: none;
        }
        .form .register-form {
        display: none;
        }
        .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
        }
        .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
        }
        .container .info {
        margin: 50px auto;
        text-align: center;
        }
        .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
        }
        .container .info span {
        color: #4d4d4d;
        font-size: 12px;
        }
        .container .info span a {
        color: #000000;
        text-decoration: none;
        }
        .container .info span .fa {
        color: #EF3B3A;
        }
        body {
        background: #76b852; /* fallback for old browsers */
        background: -webkit-linear-gradient(right, #76b852, #8DC26F);
        background: -moz-linear-gradient(right, #76b852, #8DC26F);
        background: -o-linear-gradient(right, #76b852, #8DC26F);
        background: linear-gradient(to left, #76b852, #8DC26F);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body>

    <div class="login-page">
        <div class="form" style="border-radius: 10px;">
          <form class="register-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <strong style="font-size: 12px; color: green;">{{ session('status') }}</strong>
                </div>
            @endif
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong style="font-size: 12px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            <input placeholder="Your Registered Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            <button>Send Reset Password</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form>
          <form class="login-form" method="POST" action="{{ route('login') }}">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <strong style="font-size: 12px; color: green;">{{ session('status') }}</strong>
                </div>
            @endif
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong style="font-size: 12px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            @csrf
            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


            <input id="password" placeholder="Password" type="password" class="pwd form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span style="float: right;margin-right: -45px;margin-top: -61px;position: relative;z-index: 2;">
                <button style="color: black; background: #fff;" class="btn btn-default reveal" type="button"><i class="fa fa-fw fa-eye tanda"></i></button>
            </span>
            <script language="JavaScript" type="text/javascript">
                $(".reveal");
                $(".pwd");
                $(".reveal").on('click',function() {
                    $(".tanda").toggleClass("fa-eye fa-eye-slash");
                        var $pwd = $(".pwd");
                        if ($pwd.attr('type') === 'password') {
                            $pwd.attr('type', 'text');
                        } else {
                            $pwd.attr('type', 'password');
                    }


                });
            </script>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div style="width: 100%">
                <div style="float: left;">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </div>
                <div style="float: right;padding-right: 150px;">
                    <span>Remember Me</span>
                </div>
            </div>
            <button style="border-radius: 30px;">Login</button>
            <p class="message">Forgot Your Password? <a href="#">Request Reset Password</a></p>
          </form>
        </div>
      </div>

      <footer>
          <script>
                $('.message a').click(function(){
                    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
                });
          </script>
      </footer>

</body>
</html>
