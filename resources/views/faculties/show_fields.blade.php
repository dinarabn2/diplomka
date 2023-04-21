<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $faculty->name }}</p>
</div>

<!-- Cipher Field -->
<div class="col-sm-12">
    {!! Form::label('cipher', 'Cipher:') !!}
    <p>{{ $faculty->cipher }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $faculty->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $faculty->updated_at }}</p>
</div>

