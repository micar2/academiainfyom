<table class="table table-responsive" id="documents-table">
    <thead>
        <th>Name</th>
        <th>Tipe</th>
        <th>Visibility</th>
        <th>Content</th>
        <th>Category</th>
        <th>User</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($documents as $document)
        <tr>
            <td>{!! $document->name !!}</td>
            <td>{!! $document->tipe !!}</td>
            <td>{!! $document->visibility !!}</td>
            <td>{!! $document->content !!}</td>
            <td>{!! $document->category !!}</td>
            <td>{!! $document->user !!}</td>
            <td>
                {!! Form::open(['route' => ['documents.destroy', $document->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('documents.show', [$document->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('documents.edit', [$document->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>