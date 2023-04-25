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

<div class="form-group col-sm-6">
    {!! Form::label('speciality_id', 'Мамандық:') !!}
    {!! Form::select('speciality_id', $specialities, old('speciality_id', $student->speciality->id ?? null), ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    <textarea name="text" class="editor">{{ $student['text'] ?? null}}</textarea>
</div>

<div class="form-group col-sm-12">
    <label for="feature_image">Сурет</label>
    <img src="/{{ $student['img'] ?? null }}" alt="{{$student['title']  ?? null}}" class="img-uploaded" style="display: block; width: 300px;">
    <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="{{ $student['img'] ?? null }}" readonly>
    <a href="" class="popup_selector" data-inputid="feature_image">Суретті таңдау</a>
</div>