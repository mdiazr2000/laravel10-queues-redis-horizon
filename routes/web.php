<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Support\Facades\Redis;

Route::get('test-job-redis', function() {
    \App\Jobs\TestJob::dispatch(['mail' => 'mdiazr2000@gmail.com']);
});

Route::get('test-cache-redis', function() {
    \Cache::store('redis')->put('Laradock', 'Awesome', 100);
});
