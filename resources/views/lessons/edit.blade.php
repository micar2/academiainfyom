@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Lessons
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($lessons, ['route' => ['lessons.update', $lessons->id], 'method' => 'patch']) !!}

                        @include('lessons.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection