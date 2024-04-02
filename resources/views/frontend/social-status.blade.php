@extends('layouts.front')

@section('content')
<style>


</style>

<header class="header">
    <div class="container header__wrapper">
        <img class="header__img" src="	https://artma.net/wp-content/uploads/2022/03/LOGO-ARTMA-MEDIA.png" alt="">
        <div class="header__block">
            <a class="header__link" href="#about">Біз жайлы</a>
            <a class="header__link" href="#category">Қызметтер</a>
            <a class="header__link" href="#form">Өтініш қалдыру формасы</a>
        </div>

        <a href="/login">
            <button class="header__btn">Кіру</button>
        </a>
    </div>
</header>

<div class="home-bg">
    <div class="container home-wrapper">
        <div class="home-block mx-auto tac">
            <div class="home-subtitle">Үздік</div>
            <h1 class="home-title">ART MEDIA COMPANY</h1>
            <div class="home-descr">
                ART MEDIA COMPANY жарнама агенттігі-біз күн сайын бизнес мәселелерін шешеміз.
            </div>
            <a href="#form" class="home-btn mx-auto">Өтініш қалдыру</a>
        </div>
    </div>
</div>

{{-- Start --}}

<div class="container">
    <section class="about" id="about">
        <div class="about__wrapper">
            <div class="about__text">
                <div class="about__title">Біз жайлы</div>
                <ul class="about__descr">
                    <li class="about__item">
                        <div class="about__circle">1</div>
                        <div>
                            ART MEDIA COMPANY-әртүрлі брендтер мен компаниялар үшін тиімді жарнамалық науқандарды
                            әзірлеуге
                            және
                            жүзеге асыруға маманданған креативті және инновациялық жарнама агенттігі. Біздің
                            мақсатымыз-тұтынушыларымызға нарықта ерекшеленуге, әлеуетті тұтынушылардың назарын аударуға
                            және
                            бизнес мақсаттарына жетуге көмектесу.
                        </div>
                    </li>

                    <li class="about__item">
                        <div class="about__circle">2</div>
                        <div>
                            Біз стратегия мен тұжырымдаманы әзірлеуден бастап жарнамалық материалдарды жасауға және
                            оларды
                            әртүрлі платформаларға орналастыруға дейінгі жарнамалық қызметтердің толық спектрін
                            ұсынамыз.
                            Біздің
                            команда кез келген идеяны жүзеге асыруға дайын копирайтерлер, дизайнерлер, маркетологтар,
                            жарнама
                            стратегтері және медиа жоспарлаушыларды қоса алғанда, дарынды мамандардан тұрады.
                        </div>
                    </li>

                    <li class="about__item">
                        <div class="about__circle">3</div>
                        <div>
                            Біз инновацияға ұмтыламыз және жарнама мен маркетинг әлеміндегі соңғы трендтерді үнемі
                            қадағалап
                            отырамыз. Шығармашылық көзқарас пен түпнұсқа идеялар сәтті жарнамалық науқанның негізгі
                            құрамдас
                            бөлігі екеніне сенімдіміз. Біз әрбір жоба бірегей және аудиторияда жарқын эмоциялар
                            тудыратынына
                            көз
                            жеткізу үшін жұмыс істеп жатырмыз.
                        </div>
                    </li>

                    <li class="about__item">
                        <div class="about__circle">4</div>
                        <div>
                            Біздің философиямыз-бұл өнімді немесе қызметті алға жылжыту ғана емес, сонымен қатар біздің
                            клиенттеріміз бен олардың тұтынушылары үшін құндылық жасау. Біз өз клиенттерімізбен жоғары
                            сапалы
                            қызмет көрсету және тамаша нәтижелерге қол жеткізу арқылы ұзақ мерзімді қарым-қатынасқа
                            ұмтыламыз.
                        </div>
                    </li>

                    <li class="about__item">
                        <div class="about__circle">5</div>
                        <div>
                            Егер сіз өзіңіздің брендіңіздің әлеуетін ашуға және жарнама әлемінде жаңа биіктерге жетуге
                            көмектесетін серіктес іздесеңіз, art MEDIA COMPANY компаниясына хабарласыңыз. Біз сіздің ең
                            батыл
                            идеяларыңызды жүзеге асыруға және нарықта табысқа жетуге көмектесуге дайынбыз.
                        </div>
                    </li>

                    <li class="about__item">
                        <div class="about__circle">6</div>
                        <div>
                            Жарнама агенттіктері аудиторияның реакциясы, конверсиялары және басқа да сәттілік
                            көрсеткіштері туралы мәліметтер жинау арқылы жарнамалық науқандардың тиімділігіне талдау
                            жасайды. Бұл оларға жарнама стратегиялары мен шығындарын оңтайландыруға мүмкіндік береді.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        {{-- <img class="about__img"
            src="https://cdn.dribbble.com/users/788099/screenshots/7885109/media/81c760d663c83e182d10c613fdea2a68.png?compress=1&resize=800x600&vertical=top"
            alt=""> --}}
    </section>

    {{-- <section class="about" id="university">
        <div class="about__wrapper">
            <img class="about__img"
                src="https://cdn.dribbble.com/users/6051/screenshots/4165238/coderdojo.png?compress=1&resize=800x600&vertical=top"
                alt="">
            <div class="about__text">
                <div class="about__title mb-10">Университет жайлы</div>
                <div class="about__descr mb-10">М.Әуезов атындағы Оңтүстік Қазақстан мемлекеттік университеті ірі жоғары
                    оқу орны, ғылым орталығы және мәдени-гуманитарлық мекеме ретінде пайда болуы, қалыптасуы және
                    кейінгі дамуы аймақтың өндіргіш күштерінің, оның экономикасының қарқынды өсуінің, соңғы он жылдықта
                    өткен әлеуметтік және мәдени процесстердің объективті және адекваттық көрінісі болып табылады.</div>
                <div class="about__descr">Бүгінгі таңда М.Әуезов атындағы Оңтүстік Қазақстан мемлекеттік университеті -
                    Қазақстан Республикасының ірі және көп салалы университеті, аймағымыздың инфрақұрылымының дамуы мен
                    қалыптасуына, халықаралық қоғамдастықтағы интеграция мен жаһандану үрдістеріне белсенді қатысатын
                    ғылыми-білім беру, интеллектуалдық, мәдени орталығы. Университет Қазақстанның оңтүстігіндегі 65
                    жылдан аса тарихы бар жоғары техникалық және гуманитарлық білім берудің екі үлкен мектебінен
                    құралады. Қазіргі кезде университетте 1461 оқытушы ғылыми-педагогикалық іс-әрекетпен айналысуда.
                </div>
            </div>
        </div>
    </section> --}}

    <section id="category">
        <h2 class="category-title">Қызметтер:</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd41971b3.png"
                            alt="">
                        <h5 class="card-title">Стратегиялық жоспарлау:</h5>
                        <div>
                            <ul>
                                <li>Клиенттің және оның мақсатты аудиториясының мақсаттарын талдау;</li>
                                <li>Клиенттің мақсаттары мен бюджетіне сәйкес келетін жарнама стратегиясын әзірлеу.</li>
                            </ul>
                        </div>
                        <div>
                            <span>Шығармашылық қызметтер:</span>
                            <ol>
                                <li>Жарнамалық тұжырымдамалар мен идеяларды құру.</li>
                                <li>Жарнамалық материалдарға арналған графикалық дизайн.</li>
                                <li>Жарнамалық бейнероликтер мен аудио материалдар өндірісі.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd41971d6.png"
                            alt="">
                        <h5 class="card-title">Жарнамалық орындарды медиа жоспарлау және сатып алу:</h5>
                        <div>
                            <ul>
                                <li>Ең тиімді жарнама арналарын анықтау;</li>
                                <li>Әр түрлі жарнамалық арналарға бюджетті бөлуді жоспарлау;</li>
                                <li>Жарнамалық орындарды теледидардан, радиодан, интернеттен, баспа басылымдарынан және
                                    басқа медиадан сатып алу.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd4197241.png"
                            alt="">
                        <h5 class="card-title">Мазмұнды өндіру және орналастыру:</h5>
                        <div>
                            <ul>
                                <li>Жарнама үшін мәтіндік материалдар жасау.</li>
                                <li>Жарнамалық баннерлерді, брошюраларды, парақшаларды және басқа материалдарды әзірлеу.
                                </li>
                                <li>Мазмұнды әлеуметтік желілерде, іздеу жүйелерінде және басқа онлайн платформаларда
                                    орналастыру.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd42000ad.png"
                            alt="">
                        <h5 class="card-title">Мониторинг және талдау:</h5>
                        <div>
                            <ul>
                                <li>Жарнамалық науқандардың тиімділігін бағалау.</li>
                                <li>Аудиторияның реакциясы туралы мәліметтерді жинау және талдау.</li>
                                <li>Аналитика негізінде жарнамалық стратегияларға түзетулер енгізу.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd41971d6.png"
                            alt="">
                        <h5 class="card-title">Консультациялық қызметтер:</h5>
                        <div>
                            <ul>
                                <li>Жарнама және маркетинг бойынша сараптамалық кеңестер беру.</li>
                                <li>Клиенттерге жарнаманың мақсаттары мен стратегияларын анықтауға көмектесу.</li>
                                <li>Жарнама және маркетинг саласында клиенттің персоналын оқыту.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd41971b3.png"
                            alt="">
                        <h5 class="card-title">Қоғаммен байланыс (PR):</h5>
                        <div>
                            <ul>
                                <li>PR-коммуникация стратегиясын әзірлеу және іске асыру.</li>
                                <li>Баспасөз іс-шараларын, конференцияларды, баспасөз релиздерін ұйымдастыру.</li>
                                <li>Брендтің немесе компанияның имиджі мен беделін басқару.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('adminlte-templates::common.errors')

    <div class="card mt-50">

        {!! Form::open(['route' => 'students.store', 'enctype'=>'multipart/form-data']) !!}

        <div class="card-body" id="form">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="form-title">Өтініш қалдыру формасы</h1>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row p-30">
            @include('students.fields')
        </div>

    </div>

    <div class="card-footer mx-auto tac">
        <a href="{{ url('/') }}" class="form-button">Кері қарай</a>
        {!! Form::submit('Келесі', ['class' => 'form-btn']) !!}
    </div>

    {!! Form::close() !!}
</div>
</div>

<div class="footer">
    <div class="container">
        <footer class="footer-bs">
            <div class="row footer-wrapper">
                <div class="col-md-5 footer-brand animated fadeInLeft">
                    <img class="header__img mb-20"
                        src="https://artma.net/wp-content/uploads/2022/03/LOGO-ARTMA-MEDIA.png" alt="">
                    <h2>ART MEDIA COMPANY</h2>
                    <p>ART MEDIA COMPANY-бұл өз клиенттері үшін тиімді коммуникациялық стратегияларды әзірлеуге және
                        жүзеге асыруға мамандандырылған заманауи және креативті жарнама агенттігі. Агенттік маркетинг,
                        дизайн, копирайтинг, бейне өндірісі және цифрлық салаларда әртүрлі дағдылары мен тәжірибесі бар
                        шығармашылық мамандарды біріктіреді.</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Меню —</h4>
                    <div class="col-md-12">
                        <ul class="pages">
                            <li><a href="#about">Біз жайлы</a></li>
                            <li><a href="#category">Қызметтер</a></li>
                            <li><a href="#form">Өтініш қалдыру формасы</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-social animated fadeInDown">
                    <h4>Әлеуметтік желі</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">WhatsApp</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
{{-- end --}}

@endsection
