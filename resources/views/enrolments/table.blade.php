<table class="table table-responsive" id="enrolments-table">
    <thead>
        <th>Student</th>
        <th>Subject</th>
        <th>Paid</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($enrolments as $enrolment)
        <tr>
            <td>{!! $enrolment->student !!}</td>
            <td>{!! $enrolment->subject !!}</td>
            <td>{!! $enrolment->paid !!}</td>
            <td>
                {!! Form::open(['route' => ['enrolments.destroy', $enrolment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('enrolments.show', [$enrolment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('enrolments.edit', [$enrolment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>