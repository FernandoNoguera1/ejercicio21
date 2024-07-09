<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listar Viajes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="clear">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">INICIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('viaje.index')}}">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('viaje.create') }}">Crear</a>
                </li>
            </ul>
          </div> -->
        </div>
    </nav>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Número de plazas</th>
            <th scope="col">Fecha</th>
            <th scope="col">Otros Datos</th>
            <th scope="col">Viajeros</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($viajes as $viaje)

                <tr>
                    <th scope="row">{{ $viaje->id }}</th>
                    <td>{{ $viaje->num_plazas }}</td>
                    <td>{{ $viaje->fecha }}</td>
                    <td>{{ $viaje->otros_datos }}</td>
                    <td>{{ $viaje->viajero_id }}</td>
                  
                    {{-- <td>{{$viaje->viajero_id->viajeros->nombre }}</td> --}}
                        {{-- @foreach ($viaje->viajeros as $viajero)
                        {{$viajero->nombre}},
                        @endforeach --}}
                    {{-- <td>{{ $viaje->viajeros as $viajero}}</td>

                    $viaje->viajeros->index->nomre --}}
                    <td>
                        <button type="button" class="btn btn-info" onclick="location.href='{{route('viaje.show', $viaje->id)}}'">Mostrar</button>
                        <button type="button" class="btn btn-warning" onclick="location.href='{{route('viaje.edit', $viaje->id)}}'">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#viaje{{$viaje->id}}">Borrar</button>
                        <!-- Modal eliminar -->
                        <div class="modal fade" id="viaje{{$viaje->id}}" tabindex="-1" aria-labelledby="viaje{{$viaje->id}}Label" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="viaje{{$viaje->id}}Label">Eliminar Registro</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Seguro que quieres eliminarlo?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                    <form action="{{route('viaje.destroy', $viaje->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-success w-10" onclick="location.href='{{route('viaje.create')}}'">Crear</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>