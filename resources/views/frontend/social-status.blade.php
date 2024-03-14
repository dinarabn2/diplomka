@extends('layouts.front')

@section('content')
<style>


</style>

<header class="header">
    <div class="container header__wrapper">
        <img class="header__img" src="https://smart.ukgu.kz/images/logo4.png" alt="">
        <div class="header__block">
            <a class="header__link" href="#about">Біз жайлы</a>
            <a class="header__link" href="#university">Университет жайлы</a>
            <a class="header__link" href="#category">Әлеуметтік жағдай категориялары</a>
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
            <h1 class="home-title">Әлеуметтік қолдау</h1>
            <div class="home-descr">
                М. Әуезов атындағы Әлеуметтік қолдау порталы.
                Сізді әрқашан қолдауға дайынбыз!
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
                <div class="about__title mb-10">Біз жайлы</div>
                <div class="about__descr mb-10">Студенттерді әлеуметтік қолдау орталықтары әдетте студенттерге оқу кезінде туындауы мүмкін әртүрлі қиындықтар мен стресстік жағдайларды жеңуге көмектесу үшін көптеген қызметтер мен қолдау көрсетеді. Студенттерді әлеуметтік қолдау орталықтары орындайтын бірнеше нақты тапсырмалар:</div>
                <ol class="about__descr">
                    <li>Материалдық көмек: студенттерді әлеуметтік қолдау орталықтары қаржылық қолдауды қажет ететін студенттерге стипендия, несие немесе грант түрінде материалдық көмек көрсете алады.</li>
                    <li>Академиялық қызметтегі қолдау: студенттерді әлеуметтік қолдау орталықтары студенттерге оқу іс-әрекетінде қолдау көрсете алады, мысалы, оқытылатын пәндер бойынша кеңес беру, топтық сабақтарды ұйымдастыру және т. б.</li>
                    <li>Бос уақытты және спорттық іс-шараларды ұйымдастыру: студенттерді әлеуметтік қолдау орталықтары студенттерге Мәдени іс-шаралар, спорттық турнирлер, экскурсиялар және т. б. сияқты түрлі іс-шаралар ұйымдастыра алады.</li>
                </ol>
            </div>
            <img class="about__img" src="https://cdn.dribbble.com/users/788099/screenshots/7885109/media/81c760d663c83e182d10c613fdea2a68.png?compress=1&resize=800x600&vertical=top" alt="">
        </div>
    </section>

    <section class="about" id="university">
        <div class="about__wrapper">
            <img class="about__img" src="https://cdn.dribbble.com/users/6051/screenshots/4165238/coderdojo.png?compress=1&resize=800x600&vertical=top" alt="">
            <div class="about__text">
                <div class="about__title mb-10">Университет жайлы</div>
                <div class="about__descr mb-10">М.Әуезов атындағы Оңтүстік Қазақстан мемлекеттік университеті ірі жоғары оқу орны, ғылым орталығы және мәдени-гуманитарлық мекеме ретінде пайда болуы, қалыптасуы және кейінгі дамуы аймақтың өндіргіш күштерінің, оның экономикасының қарқынды өсуінің, соңғы он жылдықта өткен әлеуметтік және мәдени процесстердің объективті және адекваттық көрінісі болып табылады.</div>
                <div class="about__descr">Бүгінгі таңда М.Әуезов атындағы Оңтүстік Қазақстан мемлекеттік университеті - Қазақстан Республикасының ірі және көп салалы университеті, аймағымыздың инфрақұрылымының дамуы мен қалыптасуына, халықаралық қоғамдастықтағы интеграция мен жаһандану үрдістеріне белсенді қатысатын ғылыми-білім беру, интеллектуалдық, мәдени орталығы. Университет Қазақстанның оңтүстігіндегі 65 жылдан аса тарихы бар жоғары техникалық және гуманитарлық білім берудің екі үлкен мектебінен құралады. Қазіргі кезде университетте 1461 оқытушы ғылыми-педагогикалық іс-әрекетпен айналысуда.</div>
            </div>
        </div>
    </section>

    <section id="category">
        <h2 class="category-title">Әлеуметтік жағдай категориялары:</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd41971b3.png" alt="">
                        <h5 class="card-title">Тұл жетім</h5>
                        <div>
                            <span>Қай категориялар бұл топқа жатады:</span>
                            <ul>
                                <li>Әкесі-анасы қайтыс болған;</li>
                                <li>18-ден асқан азамат болуы шарт.</li>
                            </ul>
                        </div>
                        <div>
                            <span>Қандай құжаттар керек:</span>
                            <ol>
                                <li>Туу туралы куәлік;</li>
                                <li>Жеке-куәлік;</li>
                                <li>Қайтыс болғаны туралы анықтама;</li>
                                <li>Қамқорлыққа берілгені туралы анықтама;</li>
                                <li>Оқып жатқаны туралы анықтама;</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd41971d6.png" alt="">
                        <h5 class="card-title">Жетім</h5>
                        <div>
                            <span>Қай категориялар бұл топқа жатады:</span>
                            <ul>
                                <li>Әкесі-анасы қайтыс болған;</li>
                                <li>Азамат қамқорлығында;</li>
                                <li>18-ге дейінгі азамат(-ша) болуы шарт.</li>
                            </ul>
                        </div>
                        <div>
                            <span>Қандай құжаттар керек:</span>
                            <ol>
                                <li>Туу туралы куәлік;</li>
                                <li>Жеке-куәлік;</li>
                                <li>Қайтыс болғаны туралы анықтама;</li>
                                <li>Қамқорлыққа берілгені туралы анықтама;</li>
                                <li>Оқып жатқаны туралы анықтама;</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd4197241.png" alt="">
                        <h5 class="card-title">Мүгедек студент</h5>
                        <div>
                            <span>Қай категориялар бұл топқа жатады:</span>
                            <ul>
                                <li>1-топ (1-топ екенін білдіретін құжатты тіркеу)</li>
                                <li>2-топ (2-топ екенін білдіретін құжатты тіркеу)</li>
                                <li>3-топ (3-топ екенін білдіретін құжатты тіркеу)</li>
                            </ul>
                        </div>
                        <div>
                            <span>Қандай құжаттар керек:</span>
                            <ol>
                                <li>Жеке-куәлік;</li>
                                <li>Мүгедектігін растайтын анықтама;</li>
                                <li>ХҚКО-нан анықтама;</li>
                                <li>Оқып жатқаны туралы анықтама;</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd42000ad.png" alt="">
                        <h5 class="card-title">Ата-анасы мүгедек</h5>
                        <div>
                            <span>Қай категориялар бұл топқа жатады:</span>
                            <ul>
                                <li>1-топ (1-топ екенін білдіретін құжатты тіркеу)</li>
                                <li>2-топ (2-топ екенін білдіретін құжатты тіркеу)</li>
                                <li>3-топ (3-топ екенін білдіретін құжатты тіркеу)</li>
                            </ul>
                        </div>
                        <div>
                            <span>Қандай құжаттар керек:</span>
                            <ol>
                                <li>Студенттің жеке-куәлігі;</li>
                                <li>Студенттің туу туралы куәлігі;</li>
                                <li>Ата-анасының мүгедектігін растайтын анықтама;</li>
                                <li>ХҚКО-нан анықтама;</li>
                                <li>Оқып жатқаны туралы анықтама;</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img" src="https://rnd.evrika.com/storage/photos/shares/i/6459fd41971b3.png" alt="">
                        <h5 class="card-title">Бір отбасынан 2 немесе одан көп студент болуы</h5>
                        <div>
                            <span>Қай категориялар бұл топқа жатады:</span>
                            <ul>
                                <li>Басқа да студенттердің болуы</li>
                            </ul>
                        </div>
                        <div>
                            <span>Қандай құжаттар керек:</span>
                            <ol>
                                <li>Студенттің жеке-куәлігі;</li>
                                <li>Студенттің туу туралы куәлігі;</li>
                                <li>Оқып жатқаны туралы анықтама;</li>
                                <li>Басқа да студенттердің оқып жатқаны туралы анықтама;</li>
                            </ol>
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
                    <img class="header__img mb-20" src="https://smart.ukgu.kz/images/logo4.png" alt="">
                    <h2>Әлеуметтік қолдау</h2>
                    <p>Студенттерді әлеуметтік қолдау орталықтары әдетте студенттерге оқу кезінде туындауы мүмкін әртүрлі қиындықтар мен стресстік жағдайларды жеңуге көмектесу үшін көптеген қызметтер мен қолдау көрсетеді.</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Меню —</h4>
                    <div class="col-md-12">
                        <ul class="pages">
                            <li><a href="#about">Біз жайлы</a></li>
                            <li><a href="#university">Университет жайлы</a></li>
                            <li><a href="#category">Әлеуметтік жағдай категориялары</a></li>
                            <li><a href="#form">Өтініш қалдыру формасы</a></li>
                            <li><a href="https://auezov.edu.kz/kaz/">Университет сайты</a></li>
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
