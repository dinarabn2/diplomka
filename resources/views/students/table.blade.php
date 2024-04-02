<style>
    .btn-group {
        gap: 5px;
    }
    .btn-xs {
        font-size: 15px;
    }
</style>

<div class="table-responsive">
    @if(count($students))
        <table class="table" id="students-table">
            <thead>
            <tr>
                <th style="width: 70px;">№</th>
                <th>Тегі</th>
                <th>Аты</th>
                <th>Жарнама түрлері</th>
                <th>Телефоны</th>
                <th>Почтасы</th>
                <th colspan="3">Өзгерту</th>
            </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('students.show', [$student->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('students.edit', [$student->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Сіз келісесіз бе?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $students->appends(['name' => request()->name, 'surname' => request()->surname, 'group' => request()->group])->links() }}
    @else
        <div class="alert alert-warning" role="alert">
            <p>Жазбалар табылмады</p>
        </div>
    @endif
</div>
