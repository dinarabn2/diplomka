@extends('layouts.front')

@section('content')

{{-- Start --}}

<div class="content px-3">
    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::open(['route' => 'students.store', 'enctype'=>'multipart/form-data']) !!}

        <div class="card-body">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="tac" style="margin-bottom: 20px;">Өтініш қалдыру формасы</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                @include('students.fields')
            </div>

        </div>

        <div class="card-footer mx-auto tac">
            <a href="{{ url('/') }}" class="btn btn-outline-dark">Кері қарай</a>
            {!! Form::submit('Келесі', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
</div>
{{-- end --}}

@endsection
