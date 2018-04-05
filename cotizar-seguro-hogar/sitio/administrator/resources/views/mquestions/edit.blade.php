@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pregunta
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                  <!-- Edit mquestion Form -->
                   {!! Form::model($mquestion, ['route' => ['mquestions.update', $mquestion->id], 'method' => 'patch', 'files' => true]) !!}
                   {{csrf_field()}}                   

                        @include('mquestions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection