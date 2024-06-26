@include('includes.header')

@include('includes.menu')

<div class="container d-flex justify-content-center align-items-center" style="heigth: 100vh;">
    <div class="row">
        <form action="/registrarCliente" method="post" style="width:25rem" class="border border-1 bg-white p-3 mt-3 mb-3">
        @csrf
            <h2>Registrar cliente</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="number" class="form-control" id="dni" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="/clientes" class="btn btn-danger">Volver atras</a>
            </form>
    </div>
</div>

@include('includes.footer')