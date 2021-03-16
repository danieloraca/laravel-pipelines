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

Route::get('/posts', [
    'uses' => 'PostController@index'
]);

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/{customerId}', 'CustomerController@show');
Route::get('/customers/{customerId}/update', 'CustomerController@update');

Route::get('/generator', function () {
    function happy($number) {
        for ($i = 1; $i < $number; $i++) {
            yield $i;
        }
    }

    foreach (happy(1000) as $number) {
        if ($number % 10 === 0) {
            dump($number . ' passing');
        }
    }
});
