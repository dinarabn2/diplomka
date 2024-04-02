<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Фамилия:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз', 'required']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Аты:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз', 'required']) !!}
</div>

<!-- Birthday Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('birthday', 'Туылған күні:') !!}
    {!! Form::date('birthday', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз', 'required']) !!}
</div> --}}

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Почтасы:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз', 'required']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Телефоны:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control art-stranger', 'placeholder' => 'Енгізіңіз', 'required'])
    !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_id', 'Жарнама түрі:') !!}
    {!! Form::select('group_id', $groups, old('name', $student->group ?? null), ['class' => 'form-control',
    'placeholder' => 'Тандаңыз', 'required']) !!}
</div>


<!-- Course Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('course', '') !!}
    {!! Form::text('course', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз', 'required']) !!}
</div> --}}

<!-- Education Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('education_type', 'Жарнамалық науқанға қойылатын талаптар:') !!}
    {!! Form::text('education_type', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз', 'required']) !!}
</div>

<!-- Group id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course', 'Өнім/қызмет сипаттамасы:') !!}
    {!! Form::text('course', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз', 'required']) !!}
</div>

{{-- <div class="form-group col-sm-12">
    <textarea name="text" class="editor">{{ $student['text'] ?? null}}</textarea>
</div>

<div class="form-group col-sm-12">
    <label for="feature_image">Сурет</label>
    <img src="{{ asset('files/img/' . $student->img) }}" alt="{{$student['title']  ?? null}}" class="img-uploaded"
        style="display: block; width: 300px;">
    <input type="text" name="img" class="form-control" id="feature_image" name="feature_image"
        value="{{ $student->img }}" readonly>
    <a href="" class="popup_selector" data-inputid="feature_image">Суретті таңдау</a>
</div> --}}

<div class="form-group col-sm-6">
    {!! Form::label('social_name', 'Өтініштің мақсаты') !!}
    {!! Form::text('social_name', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз', 'required']) !!}

</div>

<div class="form-group col-sm-12">
    {!! Form::label('text', 'Қосымша талаптар:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз']) !!}
</div>

<div class="bg-warning color-palette card-text" style="width: 100%">
    * Егер төлем жасалған болса, чекті .pdf форматында жүктеңіз.
</div>

<div class="col-sm-6 mx-auto">
    <div class="form-group">
        <label class="input-file">
            <span class="input-file-text" type="text"></span>
            <input type="file" name="file" required>
            <span class="input-file-btn">Файлды тандаңыз</span>
        </label>
    </div>
</div>

<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script>
    const mask = (selector) => {

    let setCursorPosition = (pos, elem) => {
        elem.focus();

        if (elem.setSelectionRange) {
            elem.setSelectionRange(pos, pos);
        } else if (elem.createTextRange) {
            let range = elem.createTextRange();

            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };

    function createMask(event) {
        let matrix = '+7 (___) ___ __ __',
            i = 0,
            def = matrix.replace(/\D/g, ''),
            val = this.value.replace(/\D/g, '');

        if (def.length >= val.length) {
            val = def;
        }

        this.value = matrix.replace(/./g, function(a) {
            return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? '' : a;
        });

        if (event.type === 'blur') {
            if (this.value.length == 2) {
                this.value = '';
            }
        } else {
            setCursorPosition(this.value.length, this);
        }
    }

    let inputs = document.querySelectorAll(selector);

    inputs.forEach(input => {
        input.addEventListener('input', createMask);
        input.addEventListener('focus', createMask);
        input.addEventListener('blur', createMask);
    });
    };

    mask('[name="phone"]');

    const checkTextInputs = (selector) => {
        const txtInputs = document.querySelectorAll(selector);

        txtInputs.forEach(input => {
            input.addEventListener('keypress', function(e) {
                if (e.key.match(/[^a-z 0-9 @ \.]/ig)) {
                    e.preventDefault();
                }
            });
        });
    };

    checkTextInputs('[name="email"]');

    $('.input-file input[type=file]').on('change', function(){
        let file = this.files[0];
        $(this).closest('.input-file').find('.input-file-text').html(file.name);
    });
</script>
