@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vw Questiontimes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vwQuestiontimes, ['route' => ['vwQuestiontimes.update', $vwQuestiontimes->id], 'method' => 'patch']) !!}

                        @include('vw_questiontimes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection