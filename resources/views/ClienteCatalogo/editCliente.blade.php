@extends('layouts.master')
@section('content')

{{-- <h6 class="bg-light p-2 border-top border-bottom">Marketing team</h6>



<ul class="list-group list-group-light mb-4" style="list-style:none";>

  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <img src="" alt="Foto" style="width: 100px; height: 100px; border-radius:30%"
        class="rounded-circle" />
      <div>
        <div>{{$usuario->name ?? ''}}</div>
        <div>{{$usuario->email ?? ''}}</div>
      </div>
    </div>
  </li>
  <a class="btn btn-warning" href="{{ url('/catalogo/edit/' . ($id ?? '' )) }}">
    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    Editar usuario</a>

</div> --}}

<form action="{{ url('/ClienteCatalogo/editCliente/'. $usuario->id )}}" method="POST">
    {{method_field('PUT')}}
    @csrf


    <div class="form-group">
       <label for="name">Nombre</label>
       <input type="text" name="name" id="name" value="{{$usuario->name}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$usuario->email}}" class="form-control">
     </div>





    <div class="form-group text-center">
       <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
           Modificar usuario
       </button>
    </div>

</form>




@endsection
