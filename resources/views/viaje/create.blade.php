<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Viaje</title>
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
                    <a class="nav-link active" aria-current="page" href="{{route('viaje.create')}}">Crear</a>
                </li>
            </ul>
          </div> -->
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Crear Viaje</h1>
        <form id="formulario" name="formulario" class="w-25" action="{{route('viaje.store')}}" method="POST">
            @csrf
           
            <div class="form-floating mb-3">
                <input name="num_plazas" type="number" class="form-control" id="num_plazas" placeholder="Numero de Plazas">
                <label for="num_plazas">Número de Plaza</label>
            </div>
            <div class="form-floating mb-3">
                <input name="fecha" type="date" class="form-control" id="fecha" placeholder="Fecha">
                <label for="fecha">Fecha</label>
            </div>
            <div class="form-floating mb-3">
                <input name="otros_datos" type="text" class="form-control" id="otros_datos" placeholder="Otros Datos">
                <label for="otros_datos">Otros Datos</label>
            </div>

            <div class="form-floating">
                <select id="viajero_id" name="viajero_id" class="form-select mb-3"  form="formulario" aria-label="Floating label select example">
                  <option selected>Selecciona una opción</option>
                  @foreach($viajeros as $viajero)
                    <option  value="{{$viajero->id}}">{{$viajero->nombre}}</option>
                  @endforeach
                </select>
                <label for="viajeros">Viajero</label>
            </div>
            
            <button type="submit" class="btn btn-success w-100">Crear</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>