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

Route::get( '/send-mail', function () {
    // sending the mail
    Mail::to( 'student@school.com' )
        ->send( new App\Mail\WelcomeMail() );
    // redirect the user
    return redirect( '/' )
        ->with( 'mail_sent', 'Mail sent.' );
} );
