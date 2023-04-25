<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Аты:') !!}
    <p>{{ $tutor->name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Құрылған уақыты:') !!}
    <p>{{ $tutor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Жаңартылған уақыты:') !!}
    <p>{{ $tutor->updated_at }}</p>
</div>

