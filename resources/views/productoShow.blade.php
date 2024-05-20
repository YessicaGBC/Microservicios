<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Productos</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		@vite(['resources/css/estilos.css'])
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
	<body>

		<<div class="container center-align" style="margin-top: 10%;;">
    <h1 class="header">{{$producto->nombre}}</h1>
    <h4 class="blue-text text-darken-2">Precio: ${{$producto->precio}}</h4>

    @foreach ($producto->categorias as $categoria)
        <h5>{{$categoria->categoria}}</h5>
    @endforeach
    
    <div class="row container">
        <div class="col s6">
            <a href="/producto/{{$producto->id}}/edit" class="btn waves-effect waves-light btn-large">Modificar</a>
        </div>
        <div class="col s6">
            <form method="POST" action="/producto/{{$producto->id}}" id="formulario">
                @csrf
                @method('DELETE')     
                <button type="submit" class="btn waves-effect waves-light red darken-2 btn-large">Eliminar</button>
            </form>
        </div>
    </div>
</div>
	</body>

</html>