<?php

use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('home'); // Home page
});

// Rota para a página de programação
Route::get('/programacao', function () {
    return view('programacao'); // Programação page
});

// Rota para a página de palestrantes
Route::get('/palestrantes', function () {
    return view('palestrantes'); // Palestrantes page
});

// Rota para a página de inscrição
Route::get('/inscricao', function () {
    return view('inscricao'); // Inscrição page
});

// Rota para a página de patrocinadores
Route::get('/patrocinadores', function () {
    return view('patrocinadores'); // Patrocinadores page
});
