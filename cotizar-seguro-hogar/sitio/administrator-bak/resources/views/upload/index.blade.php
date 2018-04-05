@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Cargar archivo</h1>
        <h1 class="pull-right">
           <!--<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('tstatistics.create') !!}"></a>
            https://devdojo.com/episode/image-uploads-with-laravel
           -->
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="box box-primary">
            <div class="box-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <label>Seleccionar imagen a cargar</label>
                    <input type="file" name="file" id="file">
                    <input type="submit" value="Cargar"name="submit" >
                    <input type="hidden" value="{{ csrf_token() }}" name="_token"> 
                </form>
            </div>
        </div>
    </div>

@endsection
