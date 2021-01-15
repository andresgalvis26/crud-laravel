@extends('layouts.base')

<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-7 mt-5">

      <!-- Mensaje Flash -->
      @if(session('usuarioGuardado'))
      <div class="alert alert-success">
        {{ session('usuarioGuardado') }}
      </div>
      @endif


      <!-- Validación de errors -->
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li> {{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <!-- Diseño del formulario -->
      <div class="card">
        <form action="{{route('save')}}" method="POST">
        @csrf

          <div class="card-header text-center">AGREGAR USUARIO</div>

          <div class="card-body">
            <div class="row form-group">
              <label for="" class="">Nombre</label>
              <input type="text" name="nombre" class="form-control col-md-1">
            </div><br>

            <div class="row form-group">
              <label for="" class="col-2">Apellido</label>
              <input type="text" name="apellido" class="form-control col-md-9">
            </div><br>

            <div class="row form-group">
              <label for="" class="col-2">Edad</label>
              <input type="text" name="edad" class="form-control col-md-9">
            </div><br>

            <center>
              <div class="row form-group">
                <button type="submit" name="" class="btn btn-success col-md-8 offset-2">GUARDAR</button>
              </div>
            </center>

          </div>
        </form>

        <center>
          <a class="btn btn-primary col-md-8" href="{{ url('/') }}">VER USUARIOS</a>
        </center><br>
      </div>
    </div>
  </div>
</div>
