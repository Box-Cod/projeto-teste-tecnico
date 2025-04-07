<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

use App\Models\Client;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/', function() {
        return view('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/client', [ClientController::class, 'index'])->name('client');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::get('client/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('client/delete', [ClientController::class, 'destroy'])->name('client.delete');

});
