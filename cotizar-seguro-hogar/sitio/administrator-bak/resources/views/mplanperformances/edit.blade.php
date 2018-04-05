@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mplanperformance
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mplanperformance, ['route' => ['mplanperformances.update', $mplanperformance->id], 'method' => 'patch']) !!}

                        @include('mplanperformances.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection