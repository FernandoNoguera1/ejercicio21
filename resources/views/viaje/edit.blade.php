<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Viaje</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="clear">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route('viaje.index')}}">INICIO</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('viaje.index')}}">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('viaje.create')}}">Crear</a>
                </li>
            </ul>
          </div> -->
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Editar Viaje</h1>
        <form class="w-25" action="{{route('viaje.update', $viaje)}}" method="post">
            @csrf
            @method('put')
            
            
            <div class="form-floating mb-3">
                <input name="num_plazas" type="text" class="form-control" id="num_plazas" value="{{old('num_plazas', $viaje->num_plazas)}}">
                <label for="num_plazas">Número de Plaza</label>
            </div>
            <div class="form-floating mb-3">
                <input name="fecha" type="date" class="form-control" id="fecha" value="{{old('fecha', $viaje->fecha)}}">
                <label for="fecha">Fecha</label>
            </div>
            <div class="form-floating mb-3">
                <input name="otros_datos" type="text" class="form-control" id="otros_datos" value="{{old('otros_datos', $viaje->otros_datos)}}">
                <label for="otros_datos">Otros Datos</label>
            </div>

            <div class="form-floating">
                <select name="viajero" class="form-select mb-3" id="viajeros" aria-label="Floating label select example">
                  <option selected>Selecciona una opción</option>
                  @foreach($viajeros as $viajero)
                    <option value="{{$viajero->id}}">{{$viajero->nombre}}</option>
                  @endforeach
                </select>
                <label for="viajeros">Viajero</label>
            </div>
            
            <button type="submit" class="btn btn-success w-100">Actualizar</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>