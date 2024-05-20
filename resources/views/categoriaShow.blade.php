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
<div class="container center-align" style="margin-top: 10%;;">
	<div class="container">
		<h1 class="header">{{$categoria->categoria}}</h1>
		<div class="row container">
			<div class="col s6">
				<a href="/categoria/{{$categoria->id}}/edit" class="btn waves-effect waves-light btn-large">Modificar</a>
			</div>
			<div class="col s6">
				<form method="POST" action="/categoria/{{$categoria->id}}" id="formulario">
					@csrf
					@method('DELETE')     
                    <h1>{{$categoria->id}}</h1>
					<button type="submit" class="btn waves-effect waves-light red darken-2 btn-large">Eliminar</button>
				</form>
			</div>
		</div>
	</div>
    
</div>
</html>