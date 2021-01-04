@extends('layouts.app')

@section('content')
 <link href="{{ asset('css/clock.css') }}" rel="stylesheet">
<div class="contenedor">
  <div class="widget">
  		<div class="row">
		 <div class="text-center mb-5">
                        <h1>Dashboard</h1>
                        <p>Bienvenido  {{ Auth::user()->name }}, disfrute de su estadia</p>            
                    </div>
                </div>
    <div class="fecha">
      <p id="diaSemana" class="diaSemana"></p>
      <p id="dia" class="dia"></p>
      <p>de</p>
      <p id="mes" class="mes"></p>
      <p>del</p>
      <p id="anio" class="anio"></p>
    </div>
    <div class="reloj">
      <p id="horas" class="horas"></p>
      <p>:</p>
      <p id="minutos" class="minutos"></p>
      <p>:</p>
      <div class="cajaSegundos">
        <p id="ampm" class="ampm"></p>
        <p id="segundos" class="segundos"></p>
      </div>
    </div>
  </div>
</div>
 <script src="{{ asset('js/clock.js') }}"></script>
@endsection
