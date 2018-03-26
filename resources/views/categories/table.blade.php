<table class="table table-responsive" id="categories-table">
    <thead>
        <th>Name</th>
        <th>Parent Category</th>
        <th>Route</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($categories as $categories1)
        <tr>
            <td>{!! $categories1->name !!}</td>
            @if($categories1->category_id)

            @foreach($categories as $categories2)
                {{--{{ dd($categories2) }}--}}

                @if($categories1->category_id == $categories2->id)
            <td>{!!$name=$categories2->name!!}</td>
                @endif

                @if(empty($name))
                    <td></td>
                    @endif

            @endforeach

            @else
                <td></td>
            @endif
            <td>{!! $categories1->route !!}</td>

            <td>
                {!! Form::open(['route' => ['categories.destroy', $categories1->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categories.show', [$categories1->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categories.edit', [$categories1->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>