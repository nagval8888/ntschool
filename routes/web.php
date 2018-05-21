<?php

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

Route::get('/some', 'TestController@someMethod');


// Роут для всех любых других маршрутов, например
// когда нужно прописать "такой страницы не найдено",
// происывать его в самом конце. с get глючит
/*Route::any('{any}', function(){
    return 'No such page found!';
})->where('any', '(.*)?');*/
