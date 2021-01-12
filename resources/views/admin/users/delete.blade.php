<form action="{{Route('users.destroy',$user->id)}}" method="post" onclick="return confirm('desea eliminar al usuario?');" style="display: inline-block;">
{{ csrf_field() }}
                {{ method_field('DELETE') }}
			<button type="submit" class="btn btn-danger">Destroy</button>
		</form>