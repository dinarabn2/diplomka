@extends('layouts.front')

@section('content')
<style>
    .thanks-bg {
        display: flex;
        align-items: center;
        height: 100vh;
        justify-content: center;
    }
    .alert {
        width: 80%;
    }
</style>

<div class="container">
   <div class="thanks-bg">
    <div class="alert alert-success tac" role="alert">
        <h1>Өтінішіңіз сәтті жіберілді.</h1>
        <h2>Жауапты почта арқылы күтіңіз.</h2>
        <a href="/" class="btn btn-primary mt-5">Басты бетке</a>
    </div>
   </div>
</div>
@endsection