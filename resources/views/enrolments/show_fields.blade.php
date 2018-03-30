<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $enrolment->id !!}</p>
</div>

<!-- Student Field -->
<div class="form-group">
    {!! Form::label('student', 'Student:') !!}
    <p>{!! $enrolment->student !!}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{!! $enrolment->subject !!}</p>
</div>

<!-- Paid Field -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{!! $enrolment->paid !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $enrolment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $enrolment->updated_at !!}</p>
</div>

