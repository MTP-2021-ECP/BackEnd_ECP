<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD

// Route::post('sociallogin/{provider}', 'Auth\AuthController@SocialSignup');
// Route::get('auth/{provider}/callback', 'OutController@index')->where('provider', '.*');
=======
>>>>>>> bed016b0d951cf2a0c2d689d1e629dc7a2fc5926
