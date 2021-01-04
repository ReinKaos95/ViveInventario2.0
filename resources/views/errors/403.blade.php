@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
          <h3>Error 403, no posee los permisos requeridos</h3>
          <a href="{{url('/home')}}" class="btn btn-light btn-xs mt-5">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection

