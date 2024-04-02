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
    h2{
        text-align: center;
        font-size:22px;
        margin-bottom:50px;
    }
    body{
        background:#f2f2f2;
    }
    .section{
        margin-top:30px;
        padding:50px;
        background:#fff;
    }
    .pdf-btn{
        margin-top:30px;
    }

    .panel-heading {
        text-align: right;
    }
    .panel-heading div {
        font-size: 20px;
        font-weight: normal;
    }
    .panel-title {
        text-align: center;
        margin-top: 100px;
        font-size: 34px;
        font-weight: 600;
    }
    .main-div {
        font-size: 18px;
    }
    .main-div span {
        font-size: 18px;
        font-weight: 600;
    }
    .panel-btm {
        text-align: right;
        margin-top: 22px;
        font-size: 16px;
        font-weight: 500;
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

                    <!-- Phone Field -->
                    <div class="col-sm-12">
                        {!! Form::label('phone', 'Телефоны:') !!}
                        <p>{{ $student->phone }}</p>
                    </div>

                    <div class="col-sm-12">
                        {!! Form::label('email', 'Почта:') !!}
                        <p>{{ $student->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card p-20">
            <h4>Жарнама туралы:</h4>
            <br>
            <!-- Course Field -->
            <div class="col-sm-12">
                {!! Form::label('course', 'Өнім/қызмет сипаттамасы:') !!}
                <p>{{ $student->course }}</p>
            </div>

            <div class="col-sm-12">
                {!! Form::label('faculty_id', 'Жарнама:') !!}
                <p>{{ $student->group->faculty->name }}</p>
            </div>

            <div class="col-sm-12">
                {!! Form::label('speciality_id', 'Өткізу саласы:') !!}
                <p>{{ $student->group->speciality->name }}</p>
            </div>

            <div class="col-sm-12">
                {!! Form::label('tutor_id', 'Жауаптылар:') !!}
                <p>{{ $student->group->tutor->name }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card p-20">
            <h4>Қосымша талаптар:</h4>
            <br>
            <div class="container">
                {!! Form::label('text', 'Өтініштің мақсаты:') !!}
                <div>{{ $student->social_name }}</div>
                <p>{{ $student->text }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card p-20">
            <h4>Төлем:</h4>
            <br>
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

