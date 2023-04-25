@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Өзгерту</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($speciality, ['route' => ['specialities.update', $speciality->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('specialities.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Сақтау', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('specialities.index') }}" class="btn btn-default">Болдырмау</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
