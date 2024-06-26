<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/clientes', function () {
    $clientes = DB::table('clientes')
                ->select('id','nombre', 'apellido', 'dni', 'email', 'telefono')
                ->get();

    //dd($clientes); //Hace un echo de los valores que contiene la variable
    return view('clientes', ['clientes' => $clientes]);
});

Route::get('/marcas', function () {
    $marcas = DB::table('marcas')
                ->select('id','nombre', 'descripcion')
                ->get();

    return view('marcas', ['marcas' => $marcas]);
});

// Route::get('/marcas', function () {
//     return view('marcas');
// });

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/clientes/registro', function () {
    return view('clientes/formularioRegistro');
});

Route::get('/marcas/registro', function () {
    return view('marcas/formularioRegistro');
});

Route::post('/registrarCliente', function () {

    $nombre = request()->nombre;
    $apellido = request()->apellido;
    $dni = request()->dni;
    $email = request()->email;
    $telefono = request()->telefono;

    try{
        $clientes = DB::table('clientes') ->insert([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'dni' => $dni,
            'email' => $email,
            'telefono' => $telefono
        ]);
        return redirect('/clientes')
            ->with([
                'mensaje'=>' Se agrego correctamente.',
                    'css'=>'success'
            ]);
    }
    catch ( \Throwable $th ){
        return redirect('/marcas')
            ->with([
                'mensaje'=>'No se pudo agregar',
                'css'=>'danger'
            ]);
    }
  
});

Route::post('/registrarMarca', function () {

    $marca = request()->marca;
    $descripcion = request()->descripcion;

    try{
        $marcas = DB::table('marcas') ->insert([
            'nombre' => $marca,
            'descripcion' => $descripcion
        ]);
        return redirect('/marcas')
            ->with([
                'mensaje'=>' Se agrego correctamente.',
                    'css'=>'success'
            ]);
    }
    catch ( \Throwable $th ){
        return redirect('/marcas')
            ->with([
                'mensaje'=>'No se pudo agregar',
                'css'=>'danger'
            ]);
    }
  
});

Route::get('/clientes/editar/{id}', function ($id) {
    $cliente = DB::table('clientes') ->where('id', $id) ->first();
    // dd($cliente);
    return view('clientes/formularioEditar',[ 'cliente'=>$cliente ]);
});

Route::get('/marcas/editar/{id}', function ($id) {
    $marcas = DB::table('marcas') ->where('id', $id) ->first();
    // dd($cliente);
    return view('marcas/formularioEditar',[ 'marcas'=>$marcas ]);
});

Route::post('/actualizarCliente', function () {

    $id = request()->id;
    $nombre = request()->nombre;
    $apellido = request()->apellido;
    $dni = request()->dni;
    $email = request()->email;
    $telefono = request()->telefono;


    try{
            $cliente = DB::table('clientes')
                    ->where( 'id', $id )
                    ->update(
                        [ 
                            'nombre' => $nombre,
                            'apellido' => $apellido,
                            'dni' => $dni,
                            'email' => $email,
                            'telefono' => $telefono
                        ]
                    );
        return redirect('/clientes')
            ->with([
                'mensaje'=>' Se actualizo correctamente.',
                    'css'=>'success'
            ]);
    }
    catch ( \Throwable $th ){
        return redirect('/clientes')
            ->with([
                'mensaje'=>'No se pudo actualizar',
                'css'=>'danger'
            ]);
    }
    
});

Route::post('/actualizarMarca', function () {

    $id = request()->id;
    $marca = request()->marca;
    $descripcion = request()->descripcion;

    try{
            $marcas = DB::table('marcas')
                    ->where( 'id', $id )
                    ->update(
                        [ 
                            'nombre' => $marca,
                            'descripcion' => $descripcion,
                        ]
                    );
        return redirect('/marcas')
            ->with([
                'mensaje'=>' Se actualizo correctamente.',
                    'css'=>'success'
            ]);
    }
    catch ( \Throwable $th ){
        return redirect('/marcas')
            ->with([
                'mensaje'=>'No se pudo actualizar',
                'css'=>'danger'
            ]);
    }
    
});

Route::get('/clientes/eliminar/{id}', function ($id) {

    try{
        $cliente = DB::table('clientes') ->where('id', $id) ->delete();
        // dd($cliente);
        return redirect('/clientes')
            ->with([
                'mensaje'=>' Se elimino correctamente.',
                    'css'=>'success'
            ]);
    }
    catch ( \Throwable $th ){
        return redirect('/clientes')
            ->with([
                'mensaje'=>'No se pudo eliminar',
                'css'=>'danger'
            ]);
    }
});

Route::get('/marcas/eliminar/{id}', function ($id) {

    try{
        $marcas = DB::table('marcas') ->where('id', $id) ->delete();
        // dd($cliente);
        return redirect('/marcas')
            ->with([
                'mensaje'=>' Se elimino correctamente.',
                    'css'=>'success'
            ]);
    }
    catch ( \Throwable $th ){
        return redirect('/marcas')
            ->with([
                'mensaje'=>'No se pudo eliminar',
                'css'=>'danger'
            ]);
    }
});

