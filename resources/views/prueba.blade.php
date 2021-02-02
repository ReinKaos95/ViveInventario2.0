
<table class="table table-borderless">
           <thead class="cf">
        <tr>
        	<th>Usuario</th>
            <th>Equipo</th>
            <th>Codigo salida</th>
            <th>Fecha de salida</th>
            <th>Fecha de entrada</th>
            <th>Estatus</th>
            <th>Agregado a</th>
            <th>Actualizado a</th>
            <th>Acciones</th>
         </tr>
            </thead>
        <tbody>
        
        @foreach($prestamo as $key)
        <tr>
          <td>{{$key->user}}</td>
          <td>{{$key->eq_tequid}}</td>
          <td>{{$key->pres_salida}}</td>
          <td>{{$key->pres_fecha_salida}}</td>
          <td>{{$key->pres_fecha_entrada}}</td>
          <td>{{$key->pres_estatus}}</td>
          <td>{{$key->created_at}}</td>
          <td>{{$key->updated_at}}</td>
        </tr>
        @endforeach
        
       </tbody>
</table>