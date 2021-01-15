@extends('layouts.base')

<!--<h1>Saludos desde la vista de listar</h1>-->

<div class="container  mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h2 class="text-center mb-5">EMPLEADOS</h2>

        <table class="table table-bordered table-striped text-center">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Edad</th>
            </tr>
          </thead>

          <tbody>
            @foreach($users as $user)
            <tr>
              <th>{{ $user->id}}</th>
              <th>{{ $user->Nombre}}</th>
              <th>{{ $user->Apellido}}</th>
              <th>{{ $user->Edad}}</th>
            </tr>
            @endforeach
          </tbody>
        </table>

        <!-- Instrucción para la paginación -->
        <center>
        {{ $users->links()}}

        <!-- Botón para dirigirnos a registrar un usuario -->
        <a class="btn btn-success text-center" href="{{ url('/form') }}">AÑADIR USUARIO</a>
        </center>



    </div>

  </div>

</div>
