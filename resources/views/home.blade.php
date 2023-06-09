@extends('layouts.app')

<style>
    .card-header {
        text-align: center;
        font-size: 20px;
        font-weight: 600;
    }

    .card-descr {
        margin-bottom: 20px;
    }
    .mt-20 {
        margin-top: 20px;
    }
</style>

@section('content')
<div class="container p-3">
    <div class="row mt-20">
        <div class="col-lg-3 col-6">
        
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $students }}</h3>
                    <p>Студенттер</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ url('/students') }}" class="small-box-footer">Қосымша ақпарат <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-6">
        
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $faculties }}</h3>
                    <p>Факультеттер</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ url('/faculties') }}" class="small-box-footer">Қосымша ақпарат <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-6">
            
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $specialities }}</h3>
                    <p>Мамандықтар</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ url('/specialities') }}" class="small-box-footer">Қосымша ақпарат <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-6">
        
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $groups }}</h3>
                    <p>Группалар</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ url('/groups') }}" class="small-box-footer">Қосымша ақпарат <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">ЖООАЖ - жоғары оқу орнының ақпараттық жүйесі</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-descr">
                        ЖОО-2003 жылдан бастап ОҚУ-да жұмыс істейтін жоғары оқу орнының оқу процесінің сапасын басқару мен мониторингтеудің автоматтандырылған ақпараттық жүйесі
                    </div>
                    <div class="card-descr">
                        Жоғары оқу орнының ақпараттық жүйесі оқу процесін басқаруға арналған Виртуалды жұмыс орындарынан, орталықтандырылған мәліметтер базасынан және корпоративтік желі арқылы бірыңғай кеңістікке біріктірілген оқу орнының компьютерлік сыныптарынан тұрады
                    </div>
                    <div class="card-descr">
                        Жоғары оқу орнының ақпараттық жүйесі дерекқорға жүгінуді бақылау жүйесінің арқасында ақпараттың дұрыстығы мен қорғалуын қамтамасыз етеді
                    </div>
                    <div class="card-descr">
                        Жоғары оқу орнының ақпараттық жүйесі пайдаланушылардың қол жеткізу деңгейлері шектеулі нақты уақыттағы ақпаратты ұсынады
                    </div>
                    <div class="card-descr">
                        ЖОО еңбекті көп қажет ететін операцияларды автоматтандыру, құжат айналымын жүйелеу арқасында білім беру сапасын арттыруға жәрдемдеседі
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
