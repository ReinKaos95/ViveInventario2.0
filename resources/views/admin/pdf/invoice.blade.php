<fieldset>
	<center>
		<h1>Reporte de prestamo de equipos</h1>
		@foreach($prestamos as $info)
        <p>Codigo de Prestamo: {{$info->pres_salida}}</p>
          <p>Fecha de Salida: {{$info->pres_fecha_salida}}</p>
          <p>Fecha de Entrada{{$info->pres_fecha_entrada}}</p>
          <p>Estado: {{$info->pres_estatus}}</p>
                  @endforeach
	</center>
</fieldset>