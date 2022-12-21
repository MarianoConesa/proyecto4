


@extends('layouts.master')
@section('content')

<h6 class="bg-light p-2 border-top border-bottom">Clientes</h6>



<ul class="list-group list-group-light mb-4" style="list-style:none";>
    @foreach ( $arrayUsuarios as $key=> $item )
    <a href="{{ url('/ClienteCatalogo/showCliente/' . ($key+1)) }}">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <img src="" alt="Foto" style="width: 100px; height: 100px; border-radius:30%"
        class="rounded-circle" />
      <div>
        <div>{{$item['name']}}</div>
        <div>{{$item['email']}}</div>
      </div>
    </div>
  </li>
  @endforeach

{{--
<ul class="list-group list-group-light">
    <img
        src="https://mdbootstrap.com/img/new/avatars/8.jpg"
        alt=""
        style="width: 15%; height: 15%"

        class="rounded-circle"
      />
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <div>

        <div class="fw-bold">John Doe</div>
        <div class="text-muted">john.doe@gmail.com</div>
      </div>
      <span class="badge rounded-pill badge-success">Active</span>
    </li>
</ul> --}}






{{--
    <div class="col-xl-4 col-lg-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/6.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">Alex Ray</p>
              <p class="text-muted mb-0">alex.ray@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
{{--
    <div class="col-xl-4 col-lg-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/7.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">Kate Hunington</p>
              <p class="text-muted mb-0">kate.hunington@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/9.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">Soraya Letto</p>
              <p class="text-muted mb-0">soraya.letto@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/11.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">Zeynep Dudley</p>
              <p class="text-muted mb-0">zeynep.dudley@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <img
              src="https://mdbootstrap.com/img/new/avatars/15.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1">Ayat Black</p>
              <p class="text-muted mb-0">ayat.black@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
@endsection
