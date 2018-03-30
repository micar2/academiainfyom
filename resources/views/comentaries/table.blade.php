<table class="table table-responsive" id="comentaries-table">
    <thead>
        <th>Name</th>
        <th>Post Id</th>
        <th>Content</th>
        <th>Post Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($comentaries as $comentary)
        <tr>
            <td>{!! $comentary->name !!}</td>
            <td>{!! $comentary->post_id !!}</td>
            <td>{!! $comentary->content !!}</td>
            <td>{!! $comentary->post_id !!}</td>
            <td>
                {!! Form::open(['route' => ['comentaries.destroy', $comentary->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('comentaries.show', [$comentary->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('comentaries.edit', [$comentary->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>