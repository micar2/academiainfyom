<table class="table table-responsive" id="subjects-table">
    <thead>
        <th>Teacher</th>
        <th>Start</th>
        <th>Duration</th>
        <th>Students Max</th>
        <th>Price</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($subjects as $subject)
        <tr>
            <td>{!! $subject->teacher !!}</td>
            <td>{!! $subject->start !!}</td>
            <td>{!! $subject->duration !!}</td>
            <td>{!! $subject->students_max !!}</td>
            <td>{!! $subject->price !!}</td>
            <td>
                {!! Form::open(['route' => ['subjects.destroy', $subject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subjects.show', [$subject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subjects.edit', [$subject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>