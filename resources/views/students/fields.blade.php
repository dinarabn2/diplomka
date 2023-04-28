<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Фамилия:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Аты:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Почтасы:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Телефоны:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control art-stranger', 'placeholder' => 'Енгізіңіз']) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthday', 'Туылған күні:') !!}
    {!! Form::date('birthday', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз']) !!}
</div>

<!-- Course Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course', 'Курсы:') !!}
    {!! Form::text('course', null, ['class' => 'form-control', 'placeholder' => 'Енгізіңіз']) !!}
</div>

<!-- Education Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('education_type', 'Оқу түрі:') !!}
    {!! Form::select('education_type', $educations, old('name', $student->education ?? null), ['class' => 'form-control', 'placeholder' => 'Таңдаңыз']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Жынысы:') !!}
    {!! Form::select('gender', $genders, old('name', $student->gender ?? null), ['class' => 'form-control', 'placeholder' => 'Таңдаңыз']) !!}
</div>

<!-- Group id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_id', 'Группа:') !!}
    {!! Form::select('group_id', $groups, old('group_id', $student->group->id ?? null), ['class' => 'form-control', 'placeholder' => 'Таңдаңыз']) !!}
</div>

{{-- <div class="form-group col-sm-12">
    <textarea name="text" class="editor">{{ $student['text'] ?? null}}</textarea>
</div>

<div class="form-group col-sm-12">
    <label for="feature_image">Сурет</label>
    <img src="{{ asset('files/img/' . $student->img) }}" alt="{{$student['title']  ?? null}}" class="img-uploaded" style="display: block; width: 300px;">
    <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="{{ $student->img }}" readonly>
    <a href="" class="popup_selector" data-inputid="feature_image">Суретті таңдау</a>
</div> --}}

<div class="form-group col-sm-12 mx-auto">
    {!! Form::label('surname', 'Әлеуметтік жағдайы:') !!}
    <select class="form-control" id="select" required>
        <option selected disabled hidden>Таңдаңыз</option>
        <option value="1">Тұл жетім</option>
        <option value="2">Жетім</option>
        <option value="3">Мүгедек</option>
        <option value="4">Ата-анасы мүгедек</option>
        <option value="5">Көпбалалы отбасы</option>
        <option value="6">Бір отбасыдан 2 немесе оданда көп студент</option>
    </select>

    <div class="col-sm-4">
        <div class="form-group">
            <label for="">Документы</label>
            <input name="birth_certificate" type="file" class="form-control-file" id="">
        </div>
    </div>
    
    {{-- <div class="status__wrapper status__wrapper-1">
        <h3 class="mt-3">Тұл жетім</h3>
        <ol class="row">
            <li class="col-sm-4">
                <div class="form-group">
                    <label for="">Туу туралы куәлік</label>
                    <input name="birth_certificate" type="file" class="form-control-file" id="">
                </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Қайтыс болғаны жайлы анықтама</label>
                        <input name="death_certificate" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Қамқорлығына бергені туралы анықтама</label>
                        <input name="certificate_of_guardianship" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Жеке куәлік</label>
                        <input name="identification_card" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Оқып жатқаны туралы анықтама</label>
                        <input name="certificate_of_training" type="file" class="form-control-file" id="">
                    </div>
            </li>
        </ol>
    </div>
    
    <div class="status__wrapper status__wrapper-2">
        <h3 class="mt-3">Жетім</h3>
        <ol class="row">
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Туу туралы куәлік</label>
                        <input name="birth_certificate" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Қайтыс болғаны жайлы анықтама</label>
                        <input name="death_certificate" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Қамқорлығына алғаны туралы анықтама</label>
                        <input name="certificate_of_guardianship" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Жеке куәлік</label>
                        <input name="identification_card" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Оқып жатқаны туралы анықтама</label>
                        <input name="certificate_of_training" type="file" class="form-control-file" id="">
                    </div>
            </li>
        </ol>
    </div>
    
    <div class="status__wrapper status__wrapper-3">
        <h3 class="mt-3">Мүгедек</h3>
        <ol class="row">
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Туу туралы куәлік</label>
                        <input name="birth_certificate" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Мүгедектігін растайтын анықтама</label>
                        <input name="certificate_confirming_disability" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">ХҚКО анықтама</label>
                        <input name="file" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Жеке куәлік</label>
                        <input name="identification_card" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Оқып жатқаны туралы анықтама</label>
                        <input name="certificate_of_training" type="file" class="form-control-file" id="">
                    </div>
            </li>
        </ol>
    </div>
    
    <div class="status__wrapper status__wrapper-4">
        <h3 class="mt-3">Ата-анасы мүгедек</h3>
        <ol class="row">
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Туу туралы куәлік</label>
                        <input name="birth_certificate" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Ата-анасының мүгедектігін растайтын анықтама</label>
                        <input name="certificate_confirming_disability" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">ХҚКО анықтама</label>
                        <input name="certificate_con" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Жеке куәлік</label>
                        <input name="identification_card" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Оқып жатқаны туралы анықтама</label>
                        <input name="certificate_of_training" type="file" class="form-control-file" id="">
                    </div>
            </li>
        </ol>
    </div>
    
    <div class="status__wrapper status__wrapper-5">
        <h3 class="mt-3">Көпбалалы отбасы</h3>
        <ol class="row">
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Туу туралы куәлік</label>
                        <input name="birth_certificate" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Ата-анасының жеке куәлігі</label>
                        <input name="id_parents" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Отбасы мүшелерінің туу туралы куәлігі</label>
                        <input name="bc_family_members" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Алтын немесе күміс алқа кітапшасы</label>
                        <input name="gold_or_silver_book" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Оқып жатқаны туралы анықтама</label>
                        <input name="certificate_of_training" type="file" class="form-control-file" id="">
                    </div>
            </li>
        </ol>
    </div>
    
    <div class="status__wrapper status__wrapper-6">
        <h3 class="mt-3">Бір отбасыдан 2 немесе оданда көп студент</h3>
        <ol class="row">
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Туу туралы куәлік</label>
                        <input name="birth_certificate" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Басқа да студенттердің оқу туралы анықтамасы</label>
                        <input name="other_students" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Жеке куәлік</label>
                        <input name="identification_card" type="file" class="form-control-file" id="">
                    </div>
            </li>
            <li class="col-sm-4">
                    <div class="form-group">
                        <label for="">Оқып жатқаны туралы анықтама</label>
                        <input name="certificate_of_training" type="file" class="form-control-file" id="">
                    </div>
            </li>
        </ol>
    </div> --}}
</div>

<script>

const select = document.getElementById('select');
    const docBlocks = document.querySelectorAll('.status__wrapper');

    function hiddenBlock() {
        docBlocks.forEach(doc => {
            doc.style.display = 'none';
        });
    }

    hiddenBlock();

    let lastCounter = 0;

    select.addEventListener('change', () => {
        const getValue = select.value;
        console.log(getValue);

        if (lastCounter) {
            document.querySelector(`.status__wrapper-${lastCounter}`).style.display = 'none';
        }
        document.querySelector(`.status__wrapper-${getValue}`).style.display = 'block';
        lastCounter = getValue;
    });
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
</script>