<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["name" => 'Yusuf Habib']);
});

Route::get('/ninjas', function () {
    $ninjas = [
        ['id' => '1', 'name' => 'Yves', 'skill' => 'Teleportation'],
        ['id' => '2', 'name' => 'Samuel', 'skill' => 'Bomb']
    ];

    return view('ninjas.index', ['title' => 'Ninjas of 2026 Update', 'ninjas' => $ninjas, 'token' => true]);
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ['id' => $id]);
});
