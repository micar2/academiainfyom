

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category', $categories, null, ['class' => 'form-control']) !!}
    {{--{!! Form::text('category', null, ['class' => 'form-control']) !!}--}}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
{{ Form::hidden('user_id', auth()->id()) }}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
</div>


