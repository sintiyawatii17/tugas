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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/shop ', function () {
	return view("shop");
});

Route::get('/checkout', function () {
	return view("checkout");
});

Route::get('/contact', function () {
	return view("contact");
});
 
Route::get('single-product-details', function () {
	return view("single-product-details");
});
Route::get('login ', function () {
	return view("login");
});
 
