<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <link href="{{ asset('css/tables.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">
               Equipos registrados
            </h1>
            <h3 class="text-center">
               Equipos registrados y mantenimiento
            </h3>

        </div>
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
            <thead class="cf">
        <tr>
            <th>Id</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Serial</th>
            <th>Bien nacional</th>
            <th>Estatus</th>
            <th>Agregado a</th>
            <th>Actualizado a</th>
            <th>Acciones</th>
         </tr>
            </thead>
            <tbody>
        @if($equipment)
        @foreach($equipment as $key)
        <tr>

          <td>{{$key->id}}</td>
          <td>{{$key->eq_modelo}}</td>
          <td>{{$key->eq_marca}}</td>
          <td>{{$key->eq_serial}}</td>
          <td>{{$key->eq_nbiennacional}}</td>
          <td>{{$key->eq_estatus}}</td>
          <td>{{$key->created_at}}</td>
          <td>{{$key->updated_at}}</td>
          <td><a href="{{url('/admin/equipment/'.$key->id.'/edit')}}" class="btn btn-primary">Actualizar</a>
               @include('admin.equipment.delete',['equipment'=>$key])
             </td>
        </tr>
        @endforeach
        @endif
       </tbody>
          </table>
     
    </div>
  </div>
     <div class="row">
    <button  class="btn btn-light btn-xs mt-5"><a href="{{url('/home')}}">Volver</a></button>
    <button  class="btn btn-light btn-xs mt-5"><a href="{{url('admin/equipment/create')}}">crear</a></button>
    </div>
      
</div>

