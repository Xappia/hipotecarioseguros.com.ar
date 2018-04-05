@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Plan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                  <!-- Edit Plan Form -->
                   {!! Form::model($mplannew, ['route' => ['mplannews.update', $mplannew->id], 'method' => 'patch', 'files' => true]) !!}
                   {{csrf_field()}}

                        @include('mplannews.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection