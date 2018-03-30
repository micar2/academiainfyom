<table class="table table-responsive" id="lessons-table">
    <thead>
        <th>Classroom</th>
        <th>Hour</th>
        <th>Subject</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($lessons as $lessons)
        <tr>
            <td>{!! $lessons->classroom !!}</td>
            <td>{!! $lessons->hour !!}</td>
            <td>{!! $lessons->subject !!}</td>
            <td>
                {!! Form::open(['route' => ['lessons.destroy', $lessons->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('lessons.show', [$lessons->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('lessons.edit', [$lessons->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>