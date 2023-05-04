@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Студенттер</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('students.create') }}">
                        Жаңа студентті енгізу
                    </a>
                </div>
            </div>
        </div>

        <div class="card card-body pb-0">
            <form>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="form-group">
                            <input class=" form-control" placeholder="Тегі" title="Тегі" name="surname" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="form-group">
                            <input class=" form-control" placeholder="Аты" title="Аты" name="name" type="text">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="form-group">
                            <select class="form-control" name="group_id">
                                <option value="" disabled hidden selected>Факультет</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{$faculty}}">{{ $faculty }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="form-group">
                            <select class="form-control" name="group_id">
                                <option value="" disabled hidden selected>Мамандық</option>
                                @foreach ($specialities as $speciality)
                                    <option value="{{ $speciality }}">{{ $speciality }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="form-group">
                            <select class="form-control" name="group_id">
                                <option value="" disabled hidden selected>Группа</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group }}">{{ $group }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-2 ">
                        <div class="filter-control-buttons">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp;Іздеу</button>
                            <a href="#" class="btn btn-outline-secondary" title="" data-toggle="tooltip" data-original-title="Очистить фильтр"><i class="fa fa-eraser"></i></a>
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
                @include('students.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

