<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/profil', [SkillController::class, 'index']);
Route::post('/skill', [SkillController::class, 'store']);
Route::delete('/skill/{id}', [SkillController::class, 'destroy']);
