<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Аты:') !!}
    <p>{{ $speciality->name }}</p>
</div>

<!-- Cipher Field -->
<div class="col-sm-12">
    {!! Form::label('cipher', 'Шифр:') !!}
    <p>{{ $speciality->cipher }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Құрылған уақыты:') !!}
    <p>{{ $speciality->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Жаңартылған уақыты:') !!}
    <p>{{ $speciality->updated_at }}</p>
</div>

