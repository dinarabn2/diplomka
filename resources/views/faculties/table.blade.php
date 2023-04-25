<style>
    .btn-group {
        gap: 5px;
    }
    .btn-xs {
        font-size: 15px;
    }
</style>

<div class="table-responsive">
    <table class="table" id="faculties-table">
        <thead>
        <tr>
            <th>Аты</th>
            <th>Шифр</th>
            <th colspan="3">Өзгерту</th>
        </tr>
        </thead>
        <tbody>
        @foreach($faculties as $faculty)
            <tr>
                <td>{{ $faculty->name }}</td>
            <td>{{ $faculty->cipher }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['faculties.destroy', $faculty->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faculties.show', [$faculty->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faculties.edit', [$faculty->id]) }}"
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
</div>
