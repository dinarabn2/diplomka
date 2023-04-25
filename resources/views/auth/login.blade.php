<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Login</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"
          integrity="sha512-mxrUXSjrxl8vm5GwafxcqTrEwO1/oBNU25l20GODsysHReZo4uhVISzAKzaABH6/tTfAxZrY2FprmeAP5UZY8A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <style>
        .login-page {
            background: #6495ED;
        }

        .promo-title {
            font-weight: 800;
            font-size: 40px;
            line-height: 50px;
            text-align: center;
            color: #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            margin-bottom: 30px;
        }

        .login-box {
            text-align: center;
        }

        .card {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 16px;
            box-shadow: none;
        }

        .login-card-body, .register-card-body {
            background: none;
        }

        .login-card-body .input-group .input-group-text, .register-card-body .input-group .input-group-text {
            border-left: 1px solid #ced4da;
            border-right: 0;
            color: #FFFFFF;
        }

        .login-card-body .input-group .input-group-text, .register-card-body .input-group .input-group-text {
            border-radius: 4px 0 0 4px;
        }

        .login-text {
            font-weight: 500;
            font-size: 16px;
            line-height: 20px;
            text-align: center;
            color: #FFFFFF;
        }

        .login-text:hover {
            color: #6495ED;
        }

        .mt-10 {
            display: inline-block;
            margin-top: 10px;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="login-bg">
    <div class="login-page">
        <div class="login-box">
            <img src="https://rnd.evrika.com/storage/photos/shares/644164dcb2140.png" alt="">
            <div class="promo-title"> Логин</div>
        
            <!-- /.login-logo -->
        
            <!-- /.login-box-body -->
            <div class="card">
                <div class="card-body login-card-body">
                    <form method="post" action="{{ url('/login') }}">
                        @csrf
        
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            <input type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="Email"
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <input type="password"
                                   name="password"
                                   placeholder="Пароль"
                                   class="form-control @error('password') is-invalid @enderror">
                            
                            @error('password')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Кіру</button>
                    </form>
        
                    <p class="mb-0">
                        <a class="login-text" href="{{ route('register') }}" class="text-center">Регистрация</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        
        </div>
    </div>
</div>
<!-- /.login-box -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"
        integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>
