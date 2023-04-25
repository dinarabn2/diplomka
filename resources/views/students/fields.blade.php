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
    {!! Form::select('education_type', $educations, old('name', $student->education ?? null), ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Жынысы:') !!}
    {!! Form::select('gender', $genders, old('name', $student->gender ?? null), ['class' => 'form-control']) !!}
</div>

<!-- Group id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_id', 'Группа:') !!}
    {!! Form::select('group_id', $groups, old('group_id', $student->group->id ?? null), ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    <textarea name="text" class="editor">{{ $student['text'] ?? null}}</textarea>
</div>

<div class="form-group col-sm-12">
    <label for="feature_image">Сурет</label>
    <img src="{{ asset('files/img/' . $student->img) }}" alt="{{$student['title']  ?? null}}" class="img-uploaded" style="display: block; width: 300px;">
    <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="{{ $student->img }}" readonly>
    <a href="" class="popup_selector" data-inputid="feature_image">Суретті таңдау</a>
</div>