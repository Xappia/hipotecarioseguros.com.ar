@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tstatistic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tstatistic, ['route' => ['tstatistics.update', $tstatistic->id], 'method' => 'patch']) !!}

                        @include('tstatistics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection