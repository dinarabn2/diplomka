<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="https://rnd.evrika.com/storage/photos/shares/644d077191a0c.png" type="image/png">
    <title>Өтініш</title>
</head>
<style type="text/css">
    h2{
        text-align: center;
        font-size:22px;
        margin-bottom:50px;
    }
    body{
        background:#f2f2f2;
    }
    .section{
        margin-top:30px;
        padding:50px;
        background:#fff;
    }
    .pdf-btn{
        margin-top:30px;
    }

    .panel-heading {
        text-align: right;
    }
    .panel-heading div {
        font-size: 20px;
        font-weight: normal;
    }
    .panel-title {
        text-align: center;
        margin-top: 100px;
        font-size: 34px;
        font-weight: 600;
    }
    .main-div {
        font-size: 18px;
    }
    .main-div span {
        font-size: 18px;
        font-weight: 600;
    }
    .panel-btm {
        text-align: right;
        margin-top: 22px;
        font-size: 16px;
        font-weight: 500;
    }
</style>
<body>
    <div class="container">
        <div class="@if (Route::currentRouteName() == 'pdf.preview') section @endif">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div>Мұхтар Әуезов атындағы ОҚУ ректоры</div>
                    <div>Қожамжарова Дария Пернешқызына</div>
                    <div>ИП-19-3к1 тобынан</div>
                    <div>{{cache('surname') }} {{ cache('name') }}</div>
                </div>
                <div class="panel-title">Өтініш</div>
                <div class="panel-body">
                    <div class="main-div">
                        Мен, <span>{{cache('surname')}} {{cache('name')}}</span> ИП-19-3к1 тобынан,
                        әлеуметтік жағдайыма байланысты <span>көпбалалы отбасынан</span> болғандықтан, оқу ақысына жеңілдік беруіңізді сұранамын.
                    </div>
                    <br>
                    <div class="panel-btm">Аты-жөні: <span>{{cache('surname')}} {{cache('name')}}</span></div>
                </div>
                <div class="text-center pdf-btn">
                  {{-- <a href="{{ route('pdf.generate')}}" class="btn btn-primary">Өтінішті жүктеп алу</a> --}}
                  @if (Route::currentRouteName() == 'pdf.preview')
                    <a href="{{ route('thanks')}}" class="btn btn-primary">Келесі</a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
