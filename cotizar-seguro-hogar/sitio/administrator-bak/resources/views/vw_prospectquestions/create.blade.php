@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vw Prospectquestions
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'vwProspectquestions.store']) !!}

                        @include('vw_prospectquestions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
