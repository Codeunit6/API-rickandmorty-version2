<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apimortyController;
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


Route::get('/', [apimortyController::class,'inicio'])->name('inicio');
Route::get('detalle/{id}', [apimortyController::class,'detallePersonaje'])->name('detalle');
Route::get('/inicio2',[apimortyController::class, 'inicio2'])->name('inicio2');
Route::get('/inicio3',[apimortyController::class, 'inicio3'])->name('inicio3');
Route::get('/inicio4',[apimortyController::class, 'inicio4'])->name('inicio4');
Route::get('/inicio5',[apimortyController::class, 'inicio5'])->name('inicio5');
