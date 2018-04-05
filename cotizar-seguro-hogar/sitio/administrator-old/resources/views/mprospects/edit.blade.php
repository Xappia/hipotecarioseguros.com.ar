@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prospecto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mprospect, ['route' => ['mprospects.update', $mprospect->id], 'method' => 'patch']) !!}

                        @include('mprospects.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection