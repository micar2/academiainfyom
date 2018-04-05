<!-- Email Field -->
<div class="control-group">
    <div class="form-group floating-label-form-group controls mb-0 pb-2">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'Email']) !!}
    </div>
</div>

<!-- Password Field -->
<div class="control-group">
    <div class="form-group floating-label-form-group controls mb-0 pb-2">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', null, ['class' => 'form-control','placeholder'=>'Password']) !!}
    </div>
</div>

<br>
<br>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categories.index') !!}" class="btn btn-default">Cancel</a>
</div>