@include('includes.header')

@include('includes.menu')

<div class="container">
    <div class="row">
        <h2>Registrar cliente</h2>
        <div class="mb-3 mt-3">
            <a href="/clientes/registro" class="btn btn-success">Agregar cliente</a>
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
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">DNI</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
              @foreach($clientes as $cliente)
                  <tr>
                  <th scope="row">{{ $cliente->id }}</th>
                  <td>{{ $cliente->nombre }}</td>
                  <td>{{ $cliente->apellido}}</td>
                  <td>{{ $cliente->dni}}</td>
                  <td>{{ $cliente->email}}</td>
                  <td>{{ $cliente->telefono}}</td>
                  <td><a href="/clientes/editar/{{ $cliente->id }}" class="btn btn-warning">Editar</a></td>
                  <td><a href="/clientes/eliminar/{{ $cliente->id }}" class="btn btn-danger">Eliminar</a></td>
                  </tr>
              @endforeach
            </tbody>
            </table>
    </div>
</div>

@include('includes.footer')