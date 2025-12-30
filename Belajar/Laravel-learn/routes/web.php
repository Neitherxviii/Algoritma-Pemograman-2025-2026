<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/profil', function () {
    return view('profil');
});


Route::get('/profil', [SkillController::class, 'index']);
Route::post('/skill', [SkillController::class, 'store']);
Route::delete('/skill/{id}', [SkillController::class, 'destroy']);

// Skill Routes
Route::get('/', function () {
    return view('profile');
});

Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');
Route::delete('/skills/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');
