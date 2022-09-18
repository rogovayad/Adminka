<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Log;

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

Route::view('/main','layouts.app',['name'=>'GeoAS']);

Route::resource('address', AddressController::class);

Route::view('/user','user',['name'=>'GeoAS']);

//Route::view('/login','login',['name'=>'GeoAS']);

Route::view('/login','login');

Route::view('/about','about',['name'=>'GeoAS']);

Route::get('/roles/{id}', function (int $id) {
    $role=Roles::find($id);
    dump($role);
    return $role;
});

/*Route::get('/store', function () {
    return redirect()->route('address.create');
})->name('create');*/

Route::get('/log', function () {
    Log::channel('slack')->critical('An informational message.');
    return 'ok';
});


Route::get('profile', function () {
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
