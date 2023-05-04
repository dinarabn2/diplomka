<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="shortcut icon" href="https://rnd.evrika.com/storage/photos/shares/644d077191a0c.png" type="image/png">
    <title>Әлеуметтік қолдау</title>

    <style>
        body {
            background: #181c32;
            overflow-x: hidden;
        }
        
    .home-bg {
        height: 100vh;
        color: #FFFFFF;
        background-image: url(https://smart.ukgu.kz/assets/media/illustrations/sketchy-1/14-dark.png);
        background-size: contain;
        background-position-y: bottom;
        background-repeat: no-repeat;
        background-color: #181c32;
    }
    .home-wrapper {
        height: 100vh;
        position: relative;
        display: flex;
        gap: 40px;
    }
    .home-title {
        font-weight: 600;
        font-size: 76px;
        color: #FFFFFF;
    }
    .home-descr {
        font-weight: 600;
        font-size: 28px;
        color: #FFFFFF;
    }
    .home-block {
        display: flex;
        flex-direction: column;
        gap: 30px;
        justify-content: center;
    }
    .home-img {
        margin: 100px 0 0;
        height: 87vh;
    }
    .btn {
        width: 180px;
    }
    </style>
</head>
<body>
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
</body>
</html>