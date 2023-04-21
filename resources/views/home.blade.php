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
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <div class="card-descr">
                        Жоғары оқу орнының ақпараттық жүйесі мемлекеттік және орыс тілдерінде жұмыс істеуді қолдайды
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
