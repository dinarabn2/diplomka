<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Аты:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('tutor_id', 'Жауаптылар:') !!}
    {!! Form::select('tutor_id', $tutors, old('tutor_id', $group->tutor->id ?? null), ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('faculty_id', 'Жарнама:') !!}
    {!! Form::select('faculty_id', $faculties, old('faculty_id', $group->faculty->id ?? null), ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('speciality_id', 'Өткізу саласы:') !!}
    {!! Form::select('speciality_id', $specialities, old('speciality_id', $group->speciality->id ?? null), ['class' => 'form-control']) !!}
</div>
