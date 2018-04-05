@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prospectos / Preguntas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tpropectsquiestions, ['route' => ['tpropectsquiestions.update', $tpropectsquiestions->id], 'method' => 'patch']) !!}

                        @include('tpropectsquiestions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection