<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $lessons->id !!}</p>
</div>

<!-- Classroom Field -->
<div class="form-group">
    {!! Form::label('classroom', 'Classroom:') !!}
    <p>{!! $lessons->classroom !!}</p>
</div>

<!-- Hour Field -->
<div class="form-group">
    {!! Form::label('hour', 'Hour:') !!}
    <p>{!! $lessons->hour !!}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{!! $lessons->subject !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $lessons->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $lessons->updated_at !!}</p>
</div>

