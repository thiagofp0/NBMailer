<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Receiver\ReceiverController;
use App\Http\Controllers\Template\TemplateController;


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
    //return view('dashboard');
    return redirect(route('templates.index'));
})->name('dashboard');/* ->middleware(['auth']) */


Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index'); //Mostra todos os usuários cadastrados
    Route::get('/create', [UserController::class, 'create'])->name('users.create'); //Mostra o form de cadastro de usuário
    Route::post('/', [UserController::class, 'store'])->name('users.store'); //Executa a registro do novo usuário
    Route::get('/{id}', [UserController::class, 'show'])->name('users.show'); // Mostra um usuário específico
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit'); //Mostra o form de edição de usuário
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update'); // Executa a atualização do registro
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy'); //Deleta o registro
});

Route::group(['middlewares'=> 'auth', 'prefix' => 'receivers'], function () {
    Route::get('/', [ReceiverController::class, 'index'])->name('receivers.index'); //Mostra todos os usuários cadastrados
    Route::get('/create', [ReceiverController::class, 'create'])->name('receivers.create'); //Mostra o form de cadastro de usuário
    Route::post('/', [ReceiverController::class, 'store'])->name('receivers.store'); //Executa a registro do novo usuário
    Route::get('/{id}', [ReceiverController::class, 'show'])->name('receivers.show'); // Mostra um usuário específico
    Route::get('/edit/{id}', [ReceiverController::class, 'edit'])->name('receivers.edit'); //Mostra o form de edição de usuário
    Route::put('/{id}', [ReceiverController::class, 'update'])->name('receivers.update'); // Executa a atualização do registro
    Route::delete('/delete/{id}', [ReceiverController::class, 'destroy'])->name('receivers.destroy'); //Deleta o registro
});

Route::group(['middlewares'=> 'auth', 'prefix' => 'templates'], function () {
    Route::get('/', [TemplateController::class, 'index'])->name('templates.index'); //Mostra todos os usuários cadastrados
    Route::get('/create', [TemplateController::class, 'create'])->name('templates.create'); //Mostra o form de cadastro de usuário
    Route::post('/', [TemplateController::class, 'store'])->name('templates.store'); //Executa a registro do novo usuário
    Route::get('/{id}', [TemplateController::class, 'show'])->name('templates.show'); // Mostra um usuário específico
    Route::get('/edit/{id}', [TemplateController::class, 'edit'])->name('templates.edit'); //Mostra o form de edição de usuário
    Route::put('/{id}', [TemplateController::class, 'update'])->name('templates.update'); // Executa a atualização do registro
    Route::delete('/delete/{id}', [TemplateController::class, 'destroy'])->name('templates.destroy'); //Deleta o registro
});