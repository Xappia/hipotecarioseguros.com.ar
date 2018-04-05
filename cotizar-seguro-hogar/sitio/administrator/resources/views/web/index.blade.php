@extends('layout.home')

@section('content')

    <div class="site-wrapper background-blue-green">

      <div class="site-wrapper-inner">

        <div >

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><img src="images/logo-white.png"></h3>
              <!--<nav class="nav nav-masthead">
                <a class="nav-link" href="https://www.facebook.com/hipotecario.seguros/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="nav-link" href="https://twitter.com/hipotecariosegu" target="_blank"><i class="fa fa-twitter"></i></a>
                <!-- <a class="nav-link" href="#">Contact</a> 
              </nav>-->
            </div>
          </header>

          <main role="main" class="inner cover">
	        <div >
	            @if (Route::has('login'))
	                <div >
	                    @auth
	                        <a href="{{ url('/home') }}">Home</a>
	                    @else
	                        <a href="{{ route('login') }}">Login</a>
	                        <a href="{{ route('register') }}">Register</a>
	                    @endauth
	                </div>
	            @endif

	            <div class="content">
	                <div class="title m-b-md">
	                    Hipotecario
	                </div>
	                <div class="links">
	                    <a href="/backendhipotecario/public/preguntas">Preguntas</a>
	                    <a href="http://qa-test-ok.com/">Planes</a>
	                    <a href="http://qa-test-ok.com/">Coberturas</a>
	                    <a href="http://qa-test-ok.com/">Estadísticas</a>
	                    <a href="http://qa-test-ok.com/">Prospectos</a>
	                </div>
	            </div>
	        </div>
          </main>

        </div>

      </div>

    </div>

@endsection