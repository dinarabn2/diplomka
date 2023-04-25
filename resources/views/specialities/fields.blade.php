<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Аты:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Cipher Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cipher', 'Шифр:') !!}
    {!! Form::text('cipher', null, ['class' => 'form-control']) !!}
</div>

<!-- Faculty id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faculty_id', 'Факультет:') !!}
    {!! Form::select('faculty_id', $faculties, old('faculty_id', $speciality->faculty->id  ?? null), ['class' => 'form-control']) !!}
</div>