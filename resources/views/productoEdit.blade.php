<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/estilos.css'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>CREATE</title>

    </head>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://proyecto-prueba.test/producto">My Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://proyecto-prueba.test/producto">Productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://proyecto-prueba.test/categoria">Categorías</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://proyecto-prueba.test/producto/create">Crear Producto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://proyecto-prueba.test/categoria/create">Crear Categoría</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <body class="antialiased">
        <form action="/producto/{{$producto->id}}" method="POST" id="formulario">
            @csrf
            @method('patch')
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" value="{{$producto->nombre}}"></input>
            <br><br>
            <label for="descripcion">Descripción: </label>
            <input type="text" name="descripcion" value="{{$producto->descripcion}}"></input>
            <br><br>
            <label for="precio">Precio: </label>
            <input type="number" name="precio" value="{{$producto->precio}}"></input>
            <br><br>
            <div class="">
                <label for="categorias">Categorías</label>
                <select name="categorias[]" id="categorias" multiple>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}"
                            @if($producto->categorias->contains($categoria->id)) selected @endif>
                            {{ $categoria->categoria }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br><br>
            <input type="submit" name="action" value="Enviar"></input>
        </form>
    </body>
</html>
