<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Аты:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Фамилия:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Телефоны:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthday', 'Туылған күні:') !!}
    {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course', 'Курсы:') !!}
    {!! Form::text('course', null, ['class' => 'form-control']) !!}
</div>

<!-- Education Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('education_type', 'Оқу түрі:') !!}
    {!! Form::text('education_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Жынысы:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Faculty id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faculty_id', 'Факультет:') !!}
    {!! Form::select('faculty_id', $faculties, old('faculty_id', $student->faculty->id ?? null), ['class' => 'form-control']) !!}
</div>