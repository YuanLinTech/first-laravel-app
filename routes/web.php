<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

/* Route::get('/', function(){
    return view('welcome');
});*/

Route::get('/{name}', [App\Http\Controllers\TestController::class, 'index'])->name('home');

Route::get('/noaccess', function(){
    return "You do not have the access in this computer.";
})->name('noaccess');

Route::get('/test', function(){
    return "Hello World!";
})->name('test');

Route::get('/test-1', function(){})
->middleware('first');

Route::get('/first-view', function(){
    return view('first', ['name' => 'Samantha']);
});

/* The above is equivalent to
Route::view('/first-view','first', ['name' => 'Samantha']); //Route::view(uri, view name, data) */

Route::get('/product/{id?}', function($id = null){
    $data = [
        1 => 'apple',
        2 => 'orange',
        3 => 'banana',
        4 => 'mango',
        5 => 'grape',
        6 => 'strawberry',
        7 => 'passionfruit',
        8 => 'lychee'
    ];
    return $data[$id] ?? "The fruit is not in the basket"; // Return "The fruit is not in the basket" if $data[$id] does not exist 
});

/*
Route::get('/group-test', function(){})->middleware('first');
Route::get('/group-test2', function(){})->middleware('first');
Route::get('/group-test3', function(){})->middleware('first');
Route::get('/group-test4', function(){})->middleware('first');
Route::get('/group-test5', function(){})->middleware('first');

// The five routes above can be merged into the following route group:
Route::middleware('first')->group(function(){
    Route::get('/group-test', function(){});
    Route::get('/group-test2', function(){});
    Route::get('/group-test3', function(){});
    Route::get('/group-test4', function(){});
    Route::get('/group-test5', function(){});
});*/

Route::prefix('admin')->group(function(){
    Route::get('/group-test', function(){
        return 'Hello admin';
    })->name('first');// Matches The "/admin/group-test" URL

    Route::get('/group-test1', function(){
        return 'Hello admin1';// Matches The "/admin/group-test1" URL
    })->name('second');
});

Route::get('/group-test', function(){
    return 'Hello user';
})->name('test');

Route::view('/first', 'first', ['name' => 'Taylor']);