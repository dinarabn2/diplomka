@extends('layouts.front')

@section('content')

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
    @if(isset($message)) <div class="alert alert-danger" role="alert">{{$message}}</div> @endif
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
