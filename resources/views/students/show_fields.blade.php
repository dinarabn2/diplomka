<style>
    .show-img {
        width: 180px;
        height: 180px;
        margin-right: 25px;
    }
    .show-row {
        display: flex;
        flex-direction: row;
    }
    .p-20 {
        padding: 20px;
    }
</style>
<div class="row">
    <div class="col-md-7">
        <div class="card p-20">
            <h4>Жеке деректер:</h4>
            <br>
            <div class="show-row">
                <img class="show-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfn92Uz0WoedKHZbOdgPrHJKS9lP90htuueQ&usqp=CAU" alt="">
                <div>
                    <!-- Surname Field -->
                    <div class="col-sm-12">
                        {!! Form::label('surname', 'Тегі:') !!}
                        <p>{{ $student->surname }}</p>
                    </div>
            
                    <!-- Name Field -->
                    <div class="col-sm-12">
                        {!! Form::label('name', 'Аты:') !!}
                        <p>{{ $student->name }}</p>
                    </div>

                    <!-- Gender Field -->
                    <div class="col-sm-12">
                        {!! Form::label('gender', 'Жынысы:') !!}
                        <p>@if ($student->gender && $gender) {{ $gender[$student->gender] }} @else 'Not data' @endif</p>
                    </div>

                    <!-- Birthday Field -->
                    <div class="col-sm-12">
                        {!! Form::label('birthday', 'Туылған күні:') !!}
                        <p>{{ $student->birthday }}</p>
                    </div>
            
                    <!-- Phone Field -->
                    <div class="col-sm-12">
                        {!! Form::label('phone', 'Телефоны:') !!}
                        <p>{{ $student->phone }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card p-20">
            <h4>Оқу:</h4>
            <br>
            <!-- Course Field -->
            <div class="col-sm-12">
                {!! Form::label('course', 'Курсы:') !!}
                <p>{{ $student->course }}</p>
            </div>

            <!-- Education Type Field -->
            <div class="col-sm-12">
                {!! Form::label('education_type', 'Оқу түрі:') !!}
                <p>{{ $education[$student->education_type] }}</p>
            </div>

            <div class="col-sm-12">
                {!! Form::label('faculty_id', 'Факультет:') !!}
                <p>{{ $student->group->faculty->name }}</p>
            </div>

            <div class="col-sm-12">
                {!! Form::label('speciality_id', 'Мамандық:') !!}
                <p>{{ $student->group->speciality->name }}</p>
            </div>

            <div class="col-sm-12">
                {!! Form::label('tutor_id', 'Куратор:') !!}
                <p>{{ $student->group->tutor->name }}</p>
            </div>  
        </div>
    </div>
    <div class="col-md-7">
        <div class="card p-20">
            <h4>Өтініш:</h4>
            <br>
            @include('frontend.preview')
        </div>
    </div>
    <div class="col-md-5">
        <div class="card p-20">
            <h4>Әлеуметтік жағдайы:</h4>
            <br>
            <div class="col-sm-12">
                {!! Form::label('text', 'Әлеуметтік жағдай категориясы:') !!}
                <p>{{ $student->socialStatus->name ?? ''}}</p>
            </div>
            <div class="col-sm-12">
                {!! Form::label('text', 'Жағдайы:') !!}
                <p>{{ $student->text }}</p>
            </div>
            <div class="col-sm-12">
                {!! Form::label('file', 'Файл:') !!}
                @if($student->socialStatus)
                    <a href="{{ asset('files/students/' . $student->socialStatus->document) }}">{{ $student->socialStatus->document }}</a>
                @else
                    <span>Файл қосылмаған</span>
                @endif
            </div>
        </div>
    </div>
</div>

