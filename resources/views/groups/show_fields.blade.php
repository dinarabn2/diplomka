<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Title:') !!}
    <p>{{ $group->name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('tutor_id', 'Куратор:') !!}
    <p>{{ $group->tutor->name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('faculty_id', 'Факультет:') !!}
    <p>{{ $group->faculty->name ?? null }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('speciality_id', 'Мамандық:') !!}
    <p>{{ $group->speciality->name ?? null }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $group->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $group->updated_at }}</p>
</div>

