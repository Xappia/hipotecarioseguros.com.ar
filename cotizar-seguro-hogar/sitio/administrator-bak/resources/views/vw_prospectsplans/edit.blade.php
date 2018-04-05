@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vw Prospectsplans
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vwProspectsplans, ['route' => ['vwProspectsplans.update', $vwProspectsplans->id], 'method' => 'patch']) !!}

                        @include('vw_prospectsplans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection