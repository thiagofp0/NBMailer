<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

require __DIR__.'/auth.php';
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index'); //Mostra todos os usuários cadastrados
    Route::get('/create', [UserController::class, 'create'])->name('users.create'); //Mostra o form de cadastro de usuário
    Route::post('/', [UserController::class, 'store'])->name('users.store'); //Executa a registro do novo usuário
    Route::get('/{id}', [UserController::class, 'show'])->name('users.show'); // Mostra um usuário específico
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit'); //Mostra o form de edição de usuário
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update'); // Executa a atualização do registro
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy'); //Deleta o registro
});
