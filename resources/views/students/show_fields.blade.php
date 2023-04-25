<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Аты:') !!}
    <p>{{ $student->name }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Тегі:') !!}
    <p>{{ $student->surname }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Телефоны:') !!}
    <p>{{ $student->phone }}</p>
</div>

<!-- Birthday Field -->
<div class="col-sm-12">
    {!! Form::label('birthday', 'Туылған күні:') !!}
    <p>{{ $student->birthday }}</p>
</div>

<!-- Course Field -->
<div class="col-sm-12">
    {!! Form::label('course', 'Курсы:') !!}
    <p>{{ $student->course }}</p>
</div>

<!-- Education Type Field -->
<div class="col-sm-12">
    {!! Form::label('education_type', 'Оқу түрі:') !!}
    <p>{{ $education[$student->education_type] }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Жынысы:') !!}
    <p>@if ($student->gender && $gender) {{ $gender[$student->gender] }} @else 'Not data' @endif</p>
</div>

<div class="col-sm-12">
    {!! Form::label('faculty_id', 'Факультет:') !!}
    <p>{{ $student->group->faculty->name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('speciality_id', 'Мамандық:') !!}
    <p>{{ $student->group->speciality->name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('tutor_id', 'Куратор:') !!}
    <p>{{ $student->group->tutor->name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('speciality_id', 'Контент:') !!}
    <p>{!! $student->text !!}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('img', 'Сурет:') !!}
    <img src="{{ asset($student->img) }}" alt="{{$student['title']  ?? null}}" class="img-uploaded" style="display: block; width: 300px;">
</div>