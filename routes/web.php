<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FaculiteController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('faculites', FaculiteController::class);
Route::resource('departements', DepartementController::class);
Route::resource('classes', ClasseController::class);
Route::resource('etudiants', EtudiantController::class);
Route::resource('inscriptions', InscriptionController::class);
