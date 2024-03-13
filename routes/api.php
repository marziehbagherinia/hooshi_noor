<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\IndexHomeController;
use App\Http\Controllers\Api\V1\Forms\StoreFormController;
use App\Http\Controllers\Api\V1\Forms\ShowFormController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group( [ 'prefix' => 'v1' ], function ()
{
    Route::get( '/', IndexHomeController::class );

    Route::group( [ 'prefix' => 'forms' ], function ()
    {
        Route::get( '/', ShowFormController::class );
        Route::post( '/', StoreFormController::class );
    } );
} );

