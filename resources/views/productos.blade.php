@include('includes.header')

@include('includes.menu')

<div class="container">
    <div class="row">
        <h2>Lista de Productos</h2>
        <div class="mb-3 mt-3">
            <a href="#" class="btn btn-success mb-3">Agregar producto</a>
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
                <tr>
                <th scope="row">1</th>
                <td>Notebook</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
                <td>HP</td>
                <td><a href="#" class="btn btn-warning">Editar</a></td>
                <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Notebook</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
                <td>Lenovo</td>
                <td><a href="#" class="btn btn-warning">Editar</a></td>
                <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Ipad</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
                <td>Apple</td>
                <td><a href="#" class="btn btn-warning">Editar</a></td>
                <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
            </tbody>
            </table>
    </div>
</div>

@include('includes.footer')