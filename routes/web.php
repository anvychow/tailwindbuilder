<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Zip;
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

Route::view('/', 'main')->name('home');

// Route::view('/main')

Route::middleware('guest')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
});

Route::view('password/reset', 'auth.passwords.email')->name('password.request');
Route::get('password/reset/{token}', 'Auth\PasswordResetController')->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::view('email/verify', 'auth.verify')->middleware('throttle:6,1')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')->middleware('signed')->name('verification.verify');

    Route::post('logout', 'Auth\LogoutController')->name('logout');

    Route::view('password/confirm', 'auth.passwords.confirm')->name('password.confirm');
});

Route::get('/download', function(Request $request){

    Storage::put('test.html', $request->session()->get('computed'));

    $zip = Zip::create('file.zip');
    $zip->add(Storage::url('test.html'));
    $zip->close();
    // Storage::put($zip_file, $zip);

    // return Storage::download($zip_file);
    return response()->download('file.zip');
});

Route::get('/preview', function(Request $request){
    Storage::put('style.css', $request->session()->get('css'));
    // $echo = exec('cd ../storage/app && sudo npx tailwindcss build style.css -o output.css');
    // dd($echo);

    return $request->session()->get('computed');
});