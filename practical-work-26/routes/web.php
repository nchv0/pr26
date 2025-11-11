<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Простой маршрут
Route::get('/hello', function () {
    return 'Hello World!';
});

// Маршрут с передачей данных в шаблон
Route::get('/greeting', function () {
    return view('greeting', [
        'name' => 'Student',
        'course' => 'Web Development',
        'tasks' => ['Анализ кода', 'Установка Laravel', 'Создание маршрутов']
    ]);
});

// Дополнительный маршрут с параметром
Route::get('/user/{id}', function ($id) {
    return view('user', ['userId' => $id]);
});