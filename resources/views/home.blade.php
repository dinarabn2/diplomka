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
                    <p>Тапсырыстар</p>
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
                    <p>Жарнама тізімі</p>
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
                    <p>Жауаптылар</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ url('/tutors') }}" class="small-box-footer">Қосымша ақпарат <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $groups }}</h3>
                    <p>Жарнама түрлері</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-grapЦЦЦh"></i>
                </div>
                <a href="{{ url('/groups') }}" class="small-box-footer">Қосымша ақпарат <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        </div>
</div>
@endsection
