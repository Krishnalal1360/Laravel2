<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});
// Blade Route
Route::get('/component', function(){
    return view('blade-component');
});
// Session Route
Route::get('/session', function(Request $request){
    // Session Storing
    $request->session()->put('session_key_1', ['session_value_0', 'session_value_1']);
    Session::put('session_key_2', ['session_value_2', 'session_value_3']);
    session(['session_key_3' => ['session_value_4', 'session_value_5']]);
    Session::put('session_key_4', ['session_value_6', 'session_value_7']);
    // Session Retrieving
    $value1 = $request->session()->get('session_key_1');
    $value2 = Session::get('session_key_2');
    $value3 = session('session_key_3');
    $value4 = Session::get('session_key_4');
    //dd([$value1, $value2, $value3, $value4]);
    //return view('session', ['val1'=>$value1, 'val2'=>$value2, 'val3'=>$value3]);
    // Session Updating
    Session::put('session_key_1', 'session_value_1');
    Session::put('session_key_2', 'session_value_2');
    Session::put('session_key_3', 'session_value_3');
    Session::put('session_key_4', 'session_value_4');
    $value1 = Session::get('session_key_1');
    $value2 = Session::get('session_key_2');
    $value3 = Session::get('session_key_3');
    $value4 = Session::get('session_key_4');
    //dd([$value1, $value2, $value3, $value4]);
    // Session Deleting
    Session::forget('session_key_1');
    Session::forget(['session_key_2', 'session_key_3']);
    Session::flush();
    $value1 = $request->session()->get('session_key_1');
    $value2 = Session::get('session_key_2');
    $value3 = session('session_key_3');
    $value4 = Session::get('session_key_4');
    //dd([$value1, $value2, $value3, $value4]);
    return view('session');
});
// Caching Route
Route::get('/caching', function(Request $request){
    // Caching Storing Custom Data
    Cache::put('cache_key_1', 'Cache stores value1', $seconds=10);
    Cache::put('cache_key_2', ['Cache stores value2', 'Cache stores value3'], $seconds=10);
    Cache::put('cache_key_3', ['Cache stores value4', 'Cache stores value5'], $seconds=10);
    Cache::put('cache_key_4', ['Cache stores value6', 'Cache stores value7'], $seconds=10);
    // Caching Retrieving Custom Data
    $val1 = Cache::get('cache_key_1');
    $val2 = Cache::get('cache_key_2');
    $val3 = Cache::get('cache_key_3');
    $val4 = Cache::get('cache_key_4');
    //dd([$val1, $val2, $val3, $val4]);
    //return view('cache');
    // Caching Retrieving Database Table Data
    $val5 = Cache::rememberForever('cache_key_5', function () {
        return User::all();
    });
    //
    //dd([$val1, $val2, $val3, $val4, $val5]);
    // Caching Updating Custom Data
    Cache::put('cache_key_1', 'cache_value_1', $seconds=10);
    Cache::put('cache_key_2', 'cache_value_2', $seconds=10);
    Cache::put('cache_key_3', 'cache_value_3', $seconds=10);
    Cache::put('cache_key_4', 'cache_value_4', $seconds=10);
    $val1 = Cache::get('cache_key_1');
    $val2 = Cache::get('cache_key_2');
    $val3 = Cache::get('cache_key_3');
    $val4 = Cache::get('cache_key_4');
    //dd([$val1, $val2, $val3, $val4]);
    //return view('cache');
    // Caching Deleting Custom Data
    Cache::forget('cache_key_1');
    Cache::forget('cache_key_2');
    Cache::pull('cache_key_3');
    Cache::pull('cache_key_4');
    Cache::pull('cache_key_5');
    $val1 = Cache::get('cache_key_1');
    $val2 = Cache::get('cache_key_2');
    $val3 = Cache::get('cache_key_3');
    $val4 = Cache::get('cache_key_4');
    $val5 = Cache::rememberForever('cache_key_5', function () {
        return User::all();
    });
    dd([$val1, $val2, $val3, $val4, $val5]);
});
