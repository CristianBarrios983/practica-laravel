@include('includes.header')

@include('includes.menu')

<div class="container d-flex justify-content-center align-items-center" style="heigth: 100vh;">
    <div class="row">
        <form action="/registrarMarca" method="post" style="width:25rem" class="border border-1 bg-white p-3 mt-3 mb-3">
        @csrf
            <h2>Registrar cliente</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="/clientes" class="btn btn-danger">Volver atras</a>
            </form>
    </div>
</div>

@include('includes.footer')