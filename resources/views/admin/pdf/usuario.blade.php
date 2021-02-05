<fieldset>
	<center>
		<h1>Perfil de usuario</h1>
				@foreach($usuarios as $key)
		        <img src="../images/{{$key->photos}}" width="150" />
           <p>Nombre: {{$key->name}}</p>
         <p>Apellido {{$key->surname}}</p>
         <p>Cedula: {{$key->cedula}}</p>
         <p>Usuario: {{$key->user}}</p>
         <p>Correo: {{$key->email}}</p>
         <p>Estado actual: {{$key->estatus}}</p>
         @endforeach
	</center>
</fieldset>