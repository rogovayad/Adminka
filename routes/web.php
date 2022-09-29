<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Http\Controllers\AddressController;
use App\Models\Address;
use Illuminate\Support\Facades\Log;
use \App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\Cache;


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

Route::get('/inf', function () {
    phpinfo();
});

Route::get('profile', function () {
})->middleware('auth');


//Route::get('/{locale}/address', [AddressController::class,'show'])
 //   ->name('address.show')
  //  ->middleware('setLocale');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/address_created/{id_address_eas}', function(Request $request,$id_address_eas){
    $b=Cache::tags('address')->remember(Address::created($request->input('id_address_eas',$id_address_eas)),600, function() use ($request, $id_address_eas) {
        return Address::find($request->input('id_address_eas',$id_address_eas));
    });
    dump($b);
    return 'ok';
});

/*Route::get('/address_updated/{id_address_eas}/{field}/{val}', function(Request $request, $id_address_eas, $field, $val){
    $b=Cache::tags('address')->remember(Address::updated($request->input('id_address_eas',$id_address_eas)),600, function() use ($request, $id_address_eas, $field, $val) {
        $address=Address::find($request->input('id_address_eas',$id_address_eas));
        Address::whereId_address_eas($id_address_eas)->update([
            $field=>$val
        ]);
        $address->save();
    });
    return 'ok';
});

Route::get('/address_deleted/{id_address_eas}', function(Request $request,$id_address_eas){
    $b=Cache::tags('address')->remember(Address::deleted($request->input('id_address_eas',$id_address_eas)),600, function() use ($request, $id_address_eas) {
        return Address::find($request->input('id_address_eas',$id_address_eas));
    });
    return 'ok';
});

Route::get('/address_flush', function(Request $request){
    Cache::tags('address') -> flush();
    return 'ok';
});*/
