@extends('layouts.master')
@section('content')

<h6 class="bg-light p-2 border-top border-bottom">Marketing team</h6>



<ul class="list-group list-group-light mb-4" style="list-style:none";>

  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <img src="" alt="Foto" style="width: 100px; height: 100px; border-radius:30%"
        class="rounded-circle" />
      <div>
        <div>{{$usuario->name ?? ''}}</div>
        <div>{{$usuario->email ?? ''}}{{$usuario->id}}</div>
      </div>
    </div>
  </li>
  <a class="btn btn-warning" href="{{ url('/ClienteCatalogo/editCliente/' . $usuario->id) }}">
    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    Editar usuario</a>

</div>
@endsection
