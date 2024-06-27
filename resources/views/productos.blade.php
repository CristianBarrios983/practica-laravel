@include('includes.header')

@include('includes.menu')

<div class="container">
    <div class="row">
        <h2>Lista de Productos</h2>
        <div class="mb-3 mt-3">
            <a href="/productos/registro" class="btn btn-success mb-3">Agregar producto</a>
        </div>
        <div class="mensaje">
            @if( session('mensaje') )
            <div class="alert alert-{{ session('css') }}">
                {{ session('mensaje') }}
            </div>
            @endif
        </div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Marca</th>
                <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                    <th scope="row">{{ $producto->id }}</th>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td><a href="/marcas/editar/{{ $producto->id }}" class="btn btn-warning">Editar</a></td>
                    <td><a href="/marcas/eliminar/{{ $producto->id }}" class="btn btn-danger">Eliminar</a></td>
                </tr>
            @endforeach
            </tbody>
            </table>
    </div>
</div>

@include('includes.footer')