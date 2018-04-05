@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Planes
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <!-- Create Plan Form -->
                    {!! Form::open(['route' => 'mplannews.store', 'files' => true]) !!}

                        @include('mplannews.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
