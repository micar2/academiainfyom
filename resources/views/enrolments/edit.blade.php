@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Enrolment
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($enrolment, ['route' => ['enrolments.update', $enrolment->id], 'method' => 'patch']) !!}

                        @include('enrolments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection