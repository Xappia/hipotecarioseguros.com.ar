@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vw Question
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vwQuestion, ['route' => ['vwQuestions.update', $vwQuestion->id], 'method' => 'patch']) !!}

                        @include('vw_questions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection