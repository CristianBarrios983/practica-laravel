@include('includes.header')

@include('includes.menu')

<div class="container">
    <div class="row">
        <h2>Lista de Marcas</h2>
        <div class="mb-3 mt-3">
            <a href="/marcas/registro" class="btn btn-success mb-3">Agregar marca</a>
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
                <th scope="col">Marca</th>
                <th scope="col">Descripcion</th>
                <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($marcas as $marca)
                <tr>
                <th scope="row">{{ $marca->id }}</th>
                <td>{{ $marca->nombre }}</td>
                <td>{{ $marca->descripcion }}</td>
                <td><a href="/marcas/editar/{{ $marca->id }}" class="btn btn-warning">Editar</a></td>
                <td><a href="/marcas/eliminar/{{ $marca->id }}" class="btn btn-danger">Eliminar</a></td>
                </tr>
            @endforeach
            </tbody>
            </table>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


@include('includes.footer')