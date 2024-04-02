@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Жарнама түрлері</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('groups.create') }}">
                        Жаңасын енгізу
                    </a>
                </div>
            </div>
        </div>

        <div class="card card-body pb-0">
            <form method="GET" action="{{ route('groups.index') }}">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="form-group">
                            <input class=" form-control" placeholder="Жарнаманың аты" title="Жарнама" name="name" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="form-group">
                            {!! Form::select('faculty', $faculties, null, ['class' => 'form-control', 'placeholder' => 'Жарнаманы тандаңыз']) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="form-group">
                            {!! Form::select('speciality', $specialities, null, ['class' => 'form-control', 'placeholder' => 'Өткізу саласын тандаңыз']) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-2 ">
                        <div class="filter-control-buttons">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp;Іздеу</button>
                            <a href="{{ route('groups.index', ['filter_reset' => 1]) }}" class="btn btn-outline-secondary" title="" data-toggle="tooltip" data-original-title="Очистить фильтр"><i class="fa fa-eraser"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('groups.table')

                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

