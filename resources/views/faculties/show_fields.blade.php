<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Аты:') !!}
    <p>{{ $faculty->name }}</p>
</div>

<!-- Cipher Field -->
<div class="col-sm-12">
    {!! Form::label('cipher', 'Шифр:') !!}
    <p>{{ $faculty->cipher }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Құрылған уақыты:') !!}
    <p>{{ $faculty->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Жаңартылған уақыты:') !!}
    <p>{{ $faculty->updated_at }}</p>
</div>

