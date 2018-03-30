@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comentary
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($comentary, ['route' => ['comentaries.update', $comentary->id], 'method' => 'patch']) !!}

                        @include('comentaries.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection