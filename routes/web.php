<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome', ["name" => 'Yusuf Habib']);
});

Route::get('/ninjas', [NinjaController::class, 'index']);

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ['id' => $id]);
});
