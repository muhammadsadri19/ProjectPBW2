<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerCollection;
use App\Http\Controllers\UserController;
use App\Models\Collection;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/user', [UserController::class, 'index']);
route::get('/userRegistration ', [UserController::class, 'create']);
route::post('/userStore', [UserController::class, 'store']);
route::post('/userView/{id} ', [UserController::class, 'show']);

route::get('/koleksi', [ControllerCollection::class, 'index']);
route::get('/koleksiTambah  ', [ControllerCollection::class, 'create']);
route::post('/koleksiStore', [ControllerCollection::class, 'store']);
route::post('/koleksiView/{id} ', [ControllerCollection::class, 'show']);

route::get('/getAllCollections', [CollectionController::class, 'getAllCollections'])->middleware(['auth', 'verifed']);
require __DIR__ . '/auth.php';
