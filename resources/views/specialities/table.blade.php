<style>
    .btn-group {
        gap: 5px;
    }
    .btn-xs {
        font-size: 15px;
    }
</style>

<div class="table-responsive">
    <table class="table" id="specialities-table">
        <thead>
        <tr>
            <th>№</th>
            <th>Аты</th>
            <th>Шифр</th>
            <th colspan="3">Өзгерту</th>
        </tr>
        </thead>
        <tbody>
        @foreach($specialities as $speciality)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $speciality->name }}</td>
            <td>{{ $speciality->cipher }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['specialities.destroy', $speciality->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('specialities.show', [$speciality->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('specialities.edit', [$speciality->id]) }}"
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
