@include('includes.header')

@include('includes.menu')

<div class="container d-flex justify-content-center align-items-center" style="heigth: 100vh;">
    <div class="row">
        <form action="/actualizarCliente" method="post" style="width:25rem" class="border border-1 bg-white p-3 mt-3 mb-3">
        @csrf
        <!-- @method('patch') -->
            <h2>Actualizar datos</h2>
            <div class="mb-3">
                <input type="hidden" class="form-control" id="id" name="id" value="{{ $cliente->id }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $cliente->apellido }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="number" class="form-control" id="dni" name="dni" value="{{ $cliente->dni }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="/clientes" class="btn btn-danger">Volver atras</a>
            </form>
    </div>
</div>

@include('includes.footer')