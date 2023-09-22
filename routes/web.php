<?php
use App\Http\Controllers\CrudController;
use App\Http\Controllers\Crudcontroller2;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [CrudController::class, "index"])->name("crud.index");

Route::get("/revisor", [Crudcontroller2::class, "index"])->name("crud.index");
Route::get("/revision", [Crudcontroller2::class, "index2"])->name("crud.index2");


/* ruta para añadir un nuevo artículo */ 
Route::post("/registrar-producto", [CrudController::class, "create"])->name("crud.create");

/* ruta para modificar un artículo */ 
Route::post("/modificar-producto", [CrudController::class, "update"])->name("crud.update");

/* ruta para eliminar un artículo */ 
Route::get("/eliminar-producto-{id}", [CrudController::class, "delete"])->name("crud.delete");

