@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Términos y Condiciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tagreementfile, ['route' => ['tagreementfiles.update', $tagreementfile->id], 'method' => 'patch']) !!}

                        @include('tagreementfiles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection