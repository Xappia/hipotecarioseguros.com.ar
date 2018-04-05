@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tagreementfile
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tagreementfiles.store']) !!}

                        @include('tagreementfiles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
