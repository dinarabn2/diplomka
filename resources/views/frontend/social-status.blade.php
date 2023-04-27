@extends('layouts.front')

@section('content')
<style>
    .tac {
        text-align: center;
    }
    .card {
        border: none;
    }
    .card-footer {
        border: none;
        background: none;
    }
    select {
        cursor: pointer;
    }
    label {
        margin-bottom: 4px;
        font-weight: 600;
    }
    .form-control {
        font-weight: 500;
        padding: 10px 12px;
        background: rgba(0,0,0,.03);
        border-radius: 8px;
    }
    select.form-control:not([size]):not([multiple]) {
        height: auto;
    }
</style>

{{-- Start --}}
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="tac" style="margin-top: 30px;">Өтініш қалдыру формасы</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::open(['route' => 'students.store']) !!}

        <div class="card-body">

            <div class="row">
                @include('students.fields')
            </div>

        </div>

        <div class="card-footer mx-auto tac">
            {!! Form::submit('Келесі', ['class' => 'btn btn-outline-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
</div>
{{-- end --}}

@endsection
