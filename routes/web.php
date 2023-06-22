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
    return view('index');
});

Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/ultra-low-latency-vps', function () {
    return view('latencytest');
});
Route::get('/dedicated-server', function () {
    return view('dedicatedserver');
});
Route::get('/affiliate', function () {
    return view('affiliate');
});
Route::get('/free-vps', function () {
    return view('freevps');
});
Route::get('/best-forex-vps', function () {
    return view('bestforex');
});
Route::get('/privacy-policy', function () {
    return view('privacypolicy');
});
Route::get('/terms-and-conditions', function () {
    return view('termscondition');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/how-forex-blogs', function () {
    return view('howforexblog');
});
Route::get('/best-forex-trading-strategies-for-complete-beginners', function () {
    return view('howforexblogtrading');
});


Route::any('{query}',
    function() { return redirect('/'); })
    ->where('query', '.*');


