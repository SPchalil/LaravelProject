<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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


/*
Route::get('/home', function () {
    return view('home');
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' .$name. 'with an id of '.$id;
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

*/


Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name}', [HomeController::class, 'index'])->name('home.index'); 
/*
Route::get('/user', function () {
    return view('user');
});
*/
Route::get('/user', [UserController::class, 'index'])->name('user.index'); 