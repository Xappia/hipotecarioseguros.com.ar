@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cobertura
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mincludeplan, ['route' => ['mincludeplans.update', $mincludeplan->id], 'method' => 'patch']) !!}

                        @include('mincludeplans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection