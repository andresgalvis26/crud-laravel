@extends('layouts.base')

<!--<h1>Saludos desde la vista de listar</h1>-->

<div class="container  mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h2 class="text-center mb-5">EMPLEADOS</h2>

      <!-- Realizando una modificación para hacer commit y ver cómo se ve en GitHub -->
      <!-- Realizando otra modificación desde el portatil para hacer commit y ver cómo actualiza -->
      <!-- Esto es una prueba -->
      <!-- Probando el nombre de usuario -->

      <!-- Mensaje flash -->
      @if(session('usuarioEliminado'))
      <div class="alert alert-success">
        {{ session('usuarioEliminado')}}
      </div>
      @endif

      <!-- Tabla para visualizar los registros en la BD -->
        <table class="table table-bordered table-striped text-center">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Edad</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id}}</td>
              <td>{{ $user->Nombre}}</td>
              <td>{{ $user->Apellido}}</td>
              <td>{{ $user->Edad}}</td>

              <td>

                <!-- Botón para editar información de los usuarios -->
                <a href="{{ route ('editform' , $user->id)}}" class="btn btn-primary mb-2">
                  <i class="fas fa-pencil-alt"></i>
                </a>


                <!-- Formulario para eliminar el usuario seleccionado -->
                <form action="{{ route('delete', $user->id)}}" method="POST">
                  @csrf @method('DELETE')

                  <button type="submit" onclick="return confirm('¿Desea eliminar este usuario?')" class="btn btn-danger">
                    <!-- Uso del icono de basura rojo -->
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </form>
              </td>
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
