@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prospecto
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('mprospects.show_fields')
                    <a href="{!! route('mprospects.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
