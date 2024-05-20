<!DOCTYPE html>
<html land="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/estilos.css'])
        <title>PRODUCTOS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        
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

        @if(session()->has('success'))
            <p>Se ha creado con éxito.</p>
        @endif

        <h1>PRODUCTOS</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Ver</th>
                </tr>
                
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        @foreach ($producto->categorias as $categoria)
                            {{$categoria->categoria}}<br>
                        @endforeach
                    </td>
                    <td><a href="/producto/{{$producto->id}}">IR</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>
