<!-- Classroom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom', 'Classroom:') !!}
    {!! Form::text('classroom', null, ['class' => 'form-control']) !!}
</div>

<!-- Hour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hour', 'Hour:') !!}
    {!! Form::text('hour', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('lessons.index') !!}" class="btn btn-default">Cancel</a>
</div>
