<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Cartas</title>
     <link rel="stylesheet" href="../../../assets/main.css">
</head>
<body>
    <header class="header-admin">
        <h1>Tienda de Cartas Mágicas</h1>
        <nav>
            <ul>
                <li><a href="">Cartas</a></li>
                <li><a href="">Pedidos</a></li>
                <li><a href="">Cerrar Sesión (Iván)</a></li>

            </ul>
        </nav>
    </header>
    <main class="cartas">
        <div class="container">
            <h2>Gestión de Cartas</h2>
            <a href="{{Route('cartas.create')}}" class="btn">Añadir Nueva Carta</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Rareza</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $cartas as $carta )
                    <tr>
                        <td>{{$carta->id}}</td>
                        <td>{{$carta->nombre}}</td>
                        <td>{{$carta->habilidad}}</td>
                        <td>{{$carta->rareza}}</td>
                        <td>{{$carta->precio}}</td>
                        <td>{{$carta->stock}}</td>
                        <td><a href="" class="btn btn-eliminar">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Tienda de Cartas Mágicas</p>
    </footer>
</body>
</html>
