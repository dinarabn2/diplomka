<div class="table-responsive">
    <table class="table" id="tutors-table">
        <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tutors as $tutor)
            <tr>
                <td>{{ $tutor->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tutors.destroy', $tutor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tutors.show', [$tutor->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tutors.edit', [$tutor->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
