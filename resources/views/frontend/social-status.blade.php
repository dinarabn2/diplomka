@extends('layouts.front')

@section('content')
<style>
    .card {
        margin: 0;
        min-height: 400px;
        margin-bottom: 30px;
    }
    .mt-50 {
        margin-top: 50px;
    }
    .p-30 {
        padding: 0 30px;
    }
    .m-20 {
        margin: 20px 0;
    }

</style>

<div class="home-bg">
    <div class="container home-wrapper">
        <div class="home-block mx-auto tac">
            <h1 class="home-title">Әлеуметтік қолдау</h1>
            <div class="home-descr">
                М. Әуезов атындағы Әлеуметтік қолдау порталы. <br>
                Сізді әрқашан қолдауға дайынбыз!
            </div>
            <a href="#form" class="btn btn-primary mx-auto">Өтініш қалдыру</a>
        </div>
    </div>
</div>

{{-- Start --}}

<div class="container">
    <div class="content px-3">
        <h2 class="tac home-descr m-20">Әлеуметтік жағдай категориялары:</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
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
    
        @include('adminlte-templates::common.errors')
    
        <div class="card mt-50">
    
            {!! Form::open(['route' => 'students.store', 'enctype'=>'multipart/form-data']) !!}
    
            <div class="card-body" id="form">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="tac" style="margin-bottom: 20px;">Өтініш қалдыру формасы</h1>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row p-30">
                    @include('students.fields')
                </div>
    
            </div>
    
            <div class="card-footer mx-auto tac">
                <a href="{{ url('/') }}" class="btn btn-light">Кері қарай</a>
                {!! Form::submit('Келесі', ['class' => 'btn btn-primary']) !!}
            </div>
    
            {!! Form::close() !!}
    
        </div>
    </div>
</div>
{{-- end --}}

@endsection
