@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tcoveragesplan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tcoveragesplan, ['route' => ['tcoveragesplans.update', $tcoveragesplan->id], 'method' => 'patch']) !!}

                        @include('tcoveragesplans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection