<style>
    .btn-group {
        gap: 5px;
    }
    .btn-xs {
        font-size: 15px;
    }
</style>

<div class="table-responsive">
    <table class="table" id="groups-table">
        <thead>
        <tr>
            <th style="width: 70px;">№</th>
            <th>Аты</th>
            <th>Куратор</th>
            <th colspan="3">Өзгерту</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groups as $group)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $group->name }}</td>
                <td>{{ $group->tutor->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['groups.destroy', $group->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('groups.show', [$group->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('groups.edit', [$group->id]) }}"
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
